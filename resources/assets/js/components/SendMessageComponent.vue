<template>
    <div style="position:relative;">
        <Spin size="large" fix v-if="loading"></Spin> 
        <div @click="hideEmoji" v-show="show" style="position: absolute;z-index: 8; width: 100%;height: 100%;"></div>
        <div class="chat-body pl-2 pr-2" v-chat-scroll>
            <Row class-name="pt-2 pb-2" v-for="chat in chats" :key="chat.id"> 
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
                                  <Col span="24"><strong> {{friend.name}} </strong><small>{{chat.sent_at}}</small></Col>
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
  props: ["friend"],
  data() {
    return {
      chats: [],
      message: null,
      isTyping: false,
      btnsend:false,
      show:false,
      loading:false
    };
  },
  computed: {
    session() {
      return this.friend.session;
    },
    can() {
      return this.session.blocked_by == window.auth.id
    }
  },
  watch: {
    message(value) {
      if (value) {
        Echo.private(`Chat.${this.friend.session.id}`).whisper("typing", {
          name: window.auth.name
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
          });
        }else{
          this.message +=emoji.native;
        } 
    },
    keyup(){ 
        console.log(this.message);
        if(this.message!=null && this.message !=''){
            this.btnsend=true
        }else{
            this.btnsend=false
        }
    },
    send() {
      if (this.message) {
        this.pushToChats(this.message);
        axios
          .post(`send/${this.friend.session.id}`, {
            content: this.message,
            to_user: this.friend.id
          })
          .then(res => (this.chats[this.chats.length - 1].id = res.data));
        this.message = null;
      }
    },
    pushToChats(message) { 
      this.chats.push({
        message: message,
        type: 0,
        read_at: null,
        sent_at: "Just Now"
      });
    },
    close() {
      this.$emit("close");
    },
    clear() {
      axios
        .post(`session/${this.friend.session.id}/clear`)
        .then(res => (this.chats = []));
    },
    block() {
      this.session.block = true;
      axios
        .post(`session/${this.friend.session.id}/block`)
        .then(res => (this.session.blocked_by = auth.id));
    },
    unblock() {
      this.session.block = false;
      axios
        .post(`session/${this.friend.session.id}/unblock`)
        .then(res => (this.session.blocked_by = null));
    },
    getAllMessages() {
      this.loading = true
      axios
        .post(`session/${this.friend.session.id}/chats`)
        .then(res => {
          this.chats = res.data.data
          this.loading = false  
        });
    },
    read() {
      axios.post(`session/${this.friend.session.id}/read`);
    }
  },
  created() { 
    this.read(); 
    this.getAllMessages(); 
    // sender
    Echo.private(`Chat.${this.friend.session.id}`).listen(
      "PrivateChatEvent",
      e => {
        this.friend.session.open ? this.read() : "";
        this.chats.push({ message: e.content, type: 1, sent_at: "Just Now" });
      }
    );
    // read event
    Echo.private(`Chat.${this.friend.session.id}`).listen("MsgReadEvent", e =>
      this.chats.forEach(
        chat => (chat.id == e.chat.id ? (chat.read_at = e.chat.read_at) : "")
      )
    );
    // block event
    Echo.private(`Chat.${this.friend.session.id}`).listen(
      "BlockEvent",
      e => (this.session.block = e.blocked)
    );
    // typing
    Echo.private(`Chat.${this.friend.session.id}`).listenForWhisper(
      "typing",
      e => {
        console.log('back ');
        console.log(e.name);
        this.isTyping = true;
        setTimeout(() => {
          this.isTyping = false;
        }, 2000);
      }
    );
  }
};
</script>

<style scoped>

</style>