<template>

  <div style="position:relative;"> 
        <Spin size="large" fix v-if="loading"></Spin> 
        <div @click="hideEmoji" v-show="show" style="position: absolute;z-index: 8; width: 100%;height: 100%;"></div>
        <div class="block-box border-bottom">
            <Row type="flex" justify="center" align="middle" class-name="h-100"> 
                <Col span="24" class-name="text-right"> 
                    <Icon @click.prevent="clear" size="24" type="ios-trash-outline"/>
                    <!-- <Icon @click.prevent="block" v-if="!session.block" size="24" type="ios-lock" color="red"/> -->
                    <!-- <Icon v-if="session.block && can" @click.prevent="unblock" size="24" type="ios-unlock"/> -->
                    <!-- <a class="dropdown-item" href="#" v-if="session.block && can" @click.prevent="unblock">UnBlock</a> -->
                    <!-- <a class="dropdown-item" href="#" @click.prevent="block" v-if="!session.block">Block</a> -->
                    <Icon @click.prevent="blockUnblock" size="24" :color="!session.block?'red':''" type="ios-unlock" data-icon="ios-unlock" v-if="session.block && can"/>
                    <Icon @click.prevent="blockUnblock" size="24" :color="!session.block?'red':''" type="ios-lock" data-icon="ios-lock" v-if="!session.block"/>
                </Col> 
            </Row>
        </div>
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
                              <Avatar :src="chat.profile" v-if="chat.profile"/>
                              <Avatar icon="ios-person" v-else/>
                          </Col>
                      </Row> 
                  </Card>
                  <Card :dis-hover="true" shadow v-else> 
                      <Row>
                          <Col span="1">
                              <Avatar :src="friend.profile" v-if="friend.profile"/>
                              <Avatar icon="ios-person" v-else/>
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
        <div class="send-box border-bottom border-top" v-if="!session.block">
            <Row type="flex" justify="center" align="middle" class-name="h-100"> 
                <Col span="4" push="20" class-name="text-center" >
                    <Icon class="c-happy" size="24" @click="show = !show" type="ios-happy-outline" /> 
                    <Icon @click="addLike" class="c-like" size="24" type="md-thumbs-up" v-if="!btnsend"/>
                    <Icon class="c-send" @click="send" size="24" type="md-send" v-else/>
                    <Icon class="c-image" @click="open(true)" size="24" type="md-images"/>
                    <picker emoji="point_up"  title="Emoji TreeWB" @mouseleave="mouseOut" @select="addEmoji" set="messenger" v-show="show" :style="{ position: 'absolute', bottom: '40px', right: '20px','z-index':'9' }"/>
                </Col>
                <Col span="20" pull="4">
                    <Input  @on-keyup="keyup" ref="input" @on-enter="send" v-model="message" :placeholder="isTyping ?'is Typing . . .':'Type a message...'" element-id="no-border"/>
                </Col>
            </Row>
        </div>
        <div class="send-box border-bottom border-top" v-else>
            <Row type="flex" justify="center" align="middle" class-name="h-100"> 
                <Icon color="#0000001f" :size="40" type="ios-outlet" />&nbsp; Blocked
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
      loading:false,
      show:false,
      btnsend:false
    };
  },
  computed: {
    session() {
      return this.friend.session;
    },
    can() {
      // if blocked_by user is the same current user login show unlock icon otherwish don't show
      return this.session.blocked_by == auth.id;
    }
  },
  watch: {
    message(value) { 
      if (value) { 
        Echo.private(`Chat.${this.friend.session.id}`).whisper("typing", {
          name: auth.name
        });
      }
    }
  },
  methods: {
    mouseOut(emoji){
      alert();
    },
    open(nodesc){
      this.$Notice.error({
          title: 'In development mode',
          desc: nodesc ? '' : 'Here is the notification description. Here is the notification description. '
      });
    },
    hideEmoji(){
        if(this.show){
          this.show=false;
        }
    },
    addLike(){
      let emoji ={"id":"+1","name":"Thumbs Up Sign","colons":":+1::skin-tone-6:","emoticons":[],"unified":"1f44d-1f3ff","skin":6,"native":"👍🏿"};
      this.pushToChats(emoji.native);
    },
    addEmoji(emoji){  
        console.log(emoji);
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
        sent_at: "Just Now",
        profile:auth.profile
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
    blockUnblock(event){
      if(event.target.getAttribute('data-icon')=='ios-lock'){
        this.block()
      }else{
        this.unblock()
      }
    },
    block() { 
      axios
        .post(`session/${this.friend.session.id}/block`)
        .then(res => (this.session.blocked_by = auth.id),this.session.block = true);
    },
    unblock() { 
      axios
        .post(`session/${this.friend.session.id}/unblock`)
        .then(res => (this.session.blocked_by = null),this.session.block = false);
    },
    getAllMessages() {
      this.loading = true
      axios
        .post(`session/${this.friend.session.id}/chats`)
        .then(res => (this.chats = res.data.data),this.loading = false);
    },
    read() {
      axios.post(`session/${this.friend.session.id}/read`);
    }
  },
  created() { 
    this.read();

    this.getAllMessages();

    Echo.private(`Chat.${this.friend.session.id}`).listen(
      "PrivateChatEvent",
      e => { 
        // console.log(this.friend);
        // console.log(e);
        // console.log(window.auth);
        if(this.friend.id === e.chat.user_id){ 
            this.friend.session.open ? this.read() : this.friend.session.unreadCount++;  
            this.chats.push({ message: e.content, type: 1, sent_at: "Just Now",'profile':e.profile });
        }
        
      }
    );

    Echo.private(`Chat.${this.friend.session.id}`).listen("MsgReadEvent", e =>
      this.chats.forEach(
        chat => (chat.id == e.chat.id ? (chat.read_at = e.chat.read_at) : "")
      )
    );

    Echo.private(`Chat.${this.friend.session.id}`).listen(
      "BlockEvent",
      e => (this.session.block = e.blocked)
    );

    Echo.private(`Chat.${this.friend.session.id}`).listenForWhisper(
      "typing",
      e => {
        this.isTyping = true;
        setTimeout(() => {
          this.isTyping = false;
        }, 2000);
      }
    );
  }
};
</script>

<style>
.chat-box {
  height: 400px;
}
.card-body {
  overflow-y: scroll;
}
.c-happy,.c-like,.c-image,.c-send{
  font-size:1.8vw;
}
</style>
