<template>
    <div style="position:relative;"> 
        <Spin size="large" fix v-if="loading"></Spin> 
        <div @click="hideEmoji" v-show="show" style="position: absolute;z-index: 8; width: 100%;height: 100%;"></div>
        <div class="chat-body pl-2 pr-2" v-chat-scroll>
            <Row class-name="pt-2 pb-2" v-for="chat in getChat" :key="chat.id"> 
                <Col span="24">
                  <Card :dis-hover="true" :bordered="false" v-if="chat.type == 0"> 
                      <Row type="flex" justify="end" class-name="pt-2 pb-2"> 
                          <Col span="21" class-name="pr-2">
                              <Row class-name="text-right" >
                                  <Col span="24" class-name="text-right"><strong class="color-green">You </strong> {{chat.read_at}}</Col>
                                  <Row class-name="text-right">
                                      <Col span="21" offset="3">
                                          <p>
                                              {{chat.message}}
                                          </p>
                                      </Col>
                                  </Row>
                              </Row>
                          </Col> 
                          <Col span="1">
                              <Avatar src="https://i.loli.net/2017/08/21/599a521472424.jpg" />
                          </Col>
                      </Row> 
                  </Card>
                  <Card :dis-hover="true" shadow v-else> 
                      <Row>
                          <Col span="1">
                              <Avatar src="https://i.loli.net/2017/08/21/599a521472424.jpg" />
                          </Col>
                          <Col span="21" class-name="pl-2">
                              <Row>
                                  <Col span="24"><strong> {{getF.name}} </strong><small>{{chat.sent_at}}</small></Col>
                                  <Col span="24">
                                      <p>
                                          {{chat.message}}
                                      </p>
                                  </Col>
                              </Row>
                          </Col> 
                      </Row> 
                  </Card>
                </Col> 
            </Row>
        </div>
        
        <div class="send-box border-bottom border-top">
            <Row type="flex" justify="center" align="middle" class-name="h-100"> 
                <Col span="4" push="20" class-name="text-center">
                    <Icon @click="show = !show" size="24" type="ios-happy-outline" /> 
                    <Icon size="24" type="md-thumbs-up" v-if="!btnsend"/>
                    <Icon @click="send" size="24" type="md-send" v-else/>
                    <picker @select="addEmoji" set="messenger" v-show="show" :style="{ position: 'absolute', bottom: '40px', right: '20px','z-index':'9' }"/>
                </Col>
                <Col span="20" pull="4">
                    <Input @on-keyup="keyup" ref="input" @on-enter="send" v-model="message" :placeholder="isTyping ?'is Typing . . .':'Type a message...'" element-id="no-border"/>
                </Col>
            </Row>
        </div>
    </div>
</template>

<script>
export default {
  props: {friends:Object,chatMsg:Array},
  data() {
    return { 
      message: null,
      isTyping: false,
      btnsend:false,
      show:false,
      loading:false,
      friend:this.friends,
      chats:this.chatMsg
    };
  },
  computed: {
    getF:{
      get(){
        return this.friend;
      },
      set(v){
        this.friend = v ;
      }
    },
    getChat:{
      get(){
        return this.chats;
      },
      set(v){
        this.chats = v ;
      }
    }
  },
  watch: {
    friends(v){
      this.getAllMessages(v);
      // this.read(v);
      this.getF=v;
    },
    chatMsg(v){
      console.log('watch');
      console.log(v); 
      this.getChat.push(_.last(v));
    },
    message(value) {
      if (value) {
        console.log('is typing');
        Echo.private(`Chat.${this.getF.session.id}`).whisper("typing", {
          name: window.auth.name,
          id: window.auth.id
        });
      }
    }
  },
  methods: { 
    hideEmoji(){
        if(this.show){
          this.show=false;
        }
    },
    addEmoji(emoji){  
        if(this.message==null){
          this.$nextTick(function () {
            this.message='';
            this.message +=emoji.native
            this.btnsend=true
          });
        }else{
          this.message +=emoji.native;
          this.btnsend=true
        } 
    },
    keyup(){ 
        if(this.message!=null && this.message !=''){
          this.btnsend=true
        }else{
          this.btnsend=false
        }
    },
    send(event) {  
      if (event.target.value) {
        this.pushToChats(event.target.value);
        axios.post(`send/${this.getF.session.id}`, {
            content: event.target.value,
            to_user: this.getF.id
          }).then(res => (this.getChat[this.getChat.length - 1].id = res.data));
        this.message = null; 
        console.log('emit to parent component');
        this.$emit('chatMsg',this.getF);
      }
    },
    pushToChats(message) {
      this.getChat.push({
        message: message,
        type: 0,
        read_at: null,
        sent_at: "Just Now"
      });
    },
    getAllMessages(f) {
      this.loading = true
      axios.post(`session/${f.session.id}/chats`)
        .then(res => { 
          this.getChat = res.data.data
          this.loading = false  
        });
    },
    read(f) {
      axios.post(`session/${f.session.id}/read`);
    }
  },
  created() {  
    if(this.getF){
      this.getAllMessages(this.getF);
      // typing
      Echo.private(`Chat.${this.getF.session.id}`).listenForWhisper(
        "typing",
        e => {
          this.isTyping = true;
          setTimeout(() => {
            this.isTyping = false;
          }, 2000);
        }
      );
    }else{
      // sender
      Echo.private(`Chat.${this.getF.session.id}`).listen(
        "PrivateChatEvent",
        e => { 
          this.getF.session.open ? this.read(this.getF) : "";
          if(this.getF.session.id === e.chat.session_id){
            this.getChat.push({ message: e.content, type: 1, sent_at: "Just Now" });
            console.log('broad chast ');
            console.log(this.getChat);
          }
        }
      );
      // read event
      Echo.private(`Chat.${this.getF.session.id}`).listen("MsgReadEvent", e =>
          { 
              this.getChat.forEach(
                  chat => (chat.id == e.chat.id ? (chat.read_at = e.chat.read_at) : "")
              )
          }
      );
    }
  }
};
</script>

<style scoped>

</style>