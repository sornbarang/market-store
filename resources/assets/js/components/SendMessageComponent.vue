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
        <div class="chat-body pl-2 pr-2 position-relative">
            <div class="blog-chat-body" v-chat-scroll="{always: false, smooth: true,scrollonremoved:true}">
              
              <Row class-name="text-center p-1 bg-transparent fixed-top position-absolute" v-show="chats.length > 0">
                <Col span="24">
                  <Icon v-on:click="moreChat" color="green" :size="15" type="ios-arrow-up" />
                </Col>
                <Col v-on:click="moreChat" span="24">More</Col>
              </Row>
              <Row class-name="pt-2 pb-2" v-for="chat in chats" :key="chat.id"> 
                  <Col span="24">
                    <!-- sender -->
                    <Card :dis-hover="true" :bordered="false" v-if="chat.type == 0"> 
                        <Row type="flex" justify="end" class-name="pt-2 pb-2"> 
                            <Col span="21" class-name="pr-2">
                                <Row class-name="text-right" >
                                    <Col span="24" class-name="text-right"><strong class="color-green">You </strong> {{chat.read_at}}</Col>
                                    <Row class-name="text-right">
                                        <Col span="21" offset="3" v-if="chat.message!='file'">
                                          <!-- Will return link if u share link -->
                                          <div v-html="chat.message" v-linkified />
                                        </Col>
                                        <Col span="21" offset="3" v-else>
                                          <Row type="flex" justify="end" class="code-row-bg" v-if="chat.images">
                                              <Col span="24">
                                                <div class="images" v-viewer="{movable: false}">
                                                    <Row :gutter="8" type="flex" justify="end">
                                                      <Col span="8" v-for="src in chat.images" :key="src">
                                                          <div><img :src="src" class="float-right img-fluid rounded" alt="Responsive image"> </div>
                                                      </Col>
                                                    </Row>
                                                </div>
                                              </Col>
                                              <!-- <Col span="8" class="p-2">
                                                <viewer :options="options" :images="chat.images"
                                                        @inited="inited"
                                                        class="viewer" ref="viewer"
                                                >
                                                  <template slot-scope="scope">
                                                    
                                                    <img v-for="src in scope.images" :src="src" :key="src" class="float-right img-fluid rounded" alt="Responsive image"> 
                                                  </template>
                                                </viewer> 
                                              </Col>  -->
                                          </Row> 
                                          <Row type="flex" justify="end" class="code-row-bg" v-else>
                                              <Col span="24">
                                                  No image
                                              </Col> 
                                          </Row>
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
                    <!-- receiver -->
                    <Card :dis-hover="true" shadow v-else> 
                        <Row>
                            <Col span="1">
                                <Avatar :src="friend.profile" v-if="friend.profile"/>
                                <Avatar icon="ios-person" v-else/>
                            </Col>
                            <Col span="21" class-name="pl-2">
                                <Row>
                                    <Col span="24" class-name="text-capitalize"><strong> {{friend.name}} </strong><small>{{chat.sent_at}}</small></Col>
                                    <Col span="24" v-if="chat.message!='file'">
                                        <p>
                                            <div v-html="chat.message" v-linkified />
                                        </p>
                                    </Col>
                                    <Col span="24" v-else>
                                      <Row type="flex" justify="start" class="code-row-bg" v-if="chat.images">
                                          <Col span="24">
                                            <div class="images" v-viewer="{movable: false}">
                                                <Row :gutter="8" type="flex" justify="start">
                                                  <Col span="8" v-for="src in chat.images" :key="src">
                                                      <div><img :src="src" class="float-right img-fluid rounded" alt="Responsive image"> </div>
                                                  </Col>
                                                </Row>
                                            </div>
                                          </Col>
                                          <!-- <Col span="8">
                                              <viewer :options="options" :images="chat.images"
                                                      @inited="inited"
                                                      class="viewer" ref="viewer"
                                              >
                                                <template slot-scope="scope">
                                                  <img v-for="src in scope.images" :src="src" :key="src" class="float-right img-fluid rounded" alt="Responsive image"> 
                                                </template>
                                              </viewer> 
                                          </Col>  -->
                                      </Row> 
                                      <Row type="flex" justify="start" class="code-row-bg" v-else>
                                          <Col span="24">
                                              No image
                                          </Col> 
                                      </Row>
                                    </Col>
                                </Row>
                            </Col> 
                        </Row> 
                    </Card>
                    
                  </Col> 
              </Row>
            </div>
            <Row :class-name="position">
              <Col span="24">
                <vue-dropzone 
                  ref="myVueDropzone"
                  :options="dropzoneOptions"
                  @vdropzone-drop="drop($event)"
                  @vdropzone-drag-enter="dropEnter($event)"
                  @vdropzone-drag-leave="dropLeave($event)"
                  @vdropzone-drag-over="moveOver($event)"
                  id="customdropzone" class="bg-transparent">
                </vue-dropzone>
              </Col>
            </Row>
        </div>
        <div class="send-box border-bottom border-top" v-if="!session.block">
            <Row type="flex" justify="center" align="middle" class-name="h-100"> 
                <Col span="4" push="20" class-name="text-center" >
                    <Icon class="c-happy" size="24" @click="show = !show" type="ios-happy-outline" /> 
                    <Icon @click="addLike" class="c-like" size="24" type="md-thumbs-up" v-if="!btnsend"/>
                    <Icon class="c-send" @click="send" size="24" type="md-send" v-else/>
                    <Icon class="c-image" @click="chooseFile" size="24" type="md-images"/>
                    <input ref="file" type="file" @change="onFlieChange" id="file" class="d-none" accept="image/png, image/jpeg, image/jpg" multiple>
                    <picker emoji="point_up"  title="Emoji TreeWB" @select="addEmoji" set="messenger" v-show="show" :style="{ position: 'absolute', bottom: '40px', right: '20px','z-index':'9' }"/>
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
let mythis;
import 'viewerjs/dist/viewer.css'
// import Viewer from "v-viewer/src/component.vue"
import vue2Dropzone from 'vue2-dropzone'
export default {
  props: ["friend"],
  data() {
    return {
      chats: [],
      message: null,
      errors:{}, 
      title:'',
      isTyping: false,
      loading:false,
      show:false,
      files: '',
      btnsend:false,
      type:4,
      options:{ "inline": false, "button": true, "navbar": true, "title": true, "toolbar": true, "tooltip": false, "movable": true, "zoomable": true, "rotatable": true, "scalable": true, "transition": true, "fullscreen": true, "keyboard": true, "url": "data-source" },
      allowedExtensions:['jpg','jpeg','png','webp'],
      next:null,
      dropzoneOptions: {
          url: 'https://httpbin.org/post',
          clickable:false,
          dictDefaultMessage: ""
        },
      position:'fixed-bottom position-absolute'
    };
  },
  components: {
    // Viewer:Viewer,
    vueDropzone: vue2Dropzone
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
    },
    friend(v){
      this.read();
      this.getAllMessages();
    }
  },
  methods: {
    drop(e){
      this.onFlieChange(e);
      console.log('drop');
    },
    dropLeave(e){
      this.removeAllFiles();
    },
    moveOver(e){
      e.target.classList.remove('bg-transparent');
    },
    dropEnter(e){
      this.$refs.myVueDropzone.$el.style.height="200px"
      this.$refs.myVueDropzone.$el.style.backgroundColor="#dbdbdb"
    },
    removeAllFiles(){
      this.$refs.myVueDropzone.$el.innerHTML =""
      // this.$refs.myVueDropzone.removeAllFiles()
      this.$refs.myVueDropzone.$el.style.height="20px"
      this.$refs.myVueDropzone.$el.style.backgroundColor="#ffffff"
      this.$refs.myVueDropzone.$el.classList.add('bg-transparent');
    },
    // Get more past of chat
    moreChat(){
      if(this.next){
        mythis =this;
        axios.post(this.next).then(res => {
            if(res.status==200){
                if(res.data.links.next === null){
                    this.next = null;
                }
                _.forEach(res.data.data, function(moreC) {
                    mythis.chats.unshift(moreC)
                });
            }
        });
      }else{
        this.showSuccess('Chats','No more chat...');
      }

      // if(this.chats.length > 0){
      //   let minBy = _.minBy(this.chats,'date.date');
      //   this.loading = true
      //   axios.post(`session/${this.friend.session.id}/chats`,{date:minBy.date.date})
      //   .then(function (res) {
      //     console.log(res);
      //     // handle success
      //     if(res.status == 200 && res.data.data.length > 0){
      //       _.forEach(res.data.data, function(value) {
      //         // push object of the beginning
      //         mythis.chats.unshift(value);
      //       });
      //     }
      //     mythis.loading = false
      //   })
      //   .catch(function (error) {
      //     // handle error
      //     console.log(error);
      //   })
      // }
    },
    inited (viewer) {
      this.$viewer = viewer
    },
    // open(nodesc){
    //   this.$Notice.error({
    //       title: 'In development mode',
    //       desc: nodesc ? '' : 'Here is the notification description. Here is the notification description. '
    //   });
    // },
    showError(title,msg){
      this.$Notice.error({
          title:title,
          desc: msg
      });
    },
    showSuccess(title,msg){
      this.$Notice.success({
          title:title,
          desc: msg
      });
    },
    /**
      * to validate file size
      * @param  {integer} filesize
      * @return {boolean}         
      */
    validateSize(filesize) {
        // 2*1024*1024 = 2097152 = 2mb
        if(filesize > 2097152) { 
            this.showError("File size limit exceed!","Please upload file less than 2MB.");
            // remove file from drop zone
            this.removeAllFiles();
            return false;
        }
        return true;
    },
    /**
      * to validate file extension
      * @param  {string} extension
      * @return {bolean}          
      */
    validateExtension(extension) {
        if($.inArray(extension, this.allowedExtensions) !== -1) {
          return true;
        } else { 
          this.removeAllFiles();
          this.showError("Invalid file!","Please upload jpg,png,jpeg,webp file only.");
          // remove file from drop zone
          return false;
        }
    },
    /**
      * find extension of uploaded file
      * @param  {string} filename
      * @return {string}         
      */
    findExtension(filename) {
        return filename.split('.').pop().toLowerCase();
    },
    /**
      * validate file
      * @param  {integer} filesize 
      * @param  {string} extension
      * @return {boolean}
      */
    validateFile(filesize,extension) {
        if(this.validateSize(filesize) && this.validateExtension(extension)) {
          return true;
        } else {
          return false;
        }
    },
    chooseFile() {
        $("#file").click();
    },
    onFlieChange(file) {
      this.files = file.target.files || file.dataTransfer.files; 
      let data = new FormData(); 
      const config = {
        headers: { 'content-type': 'multipart/form-data' }
      }
      if(this.files.length > 0) { 
        for( var i = 0; i < this.files.length; i++ ){
          let file = this.files[i]; 
          let extension = this.findExtension(file.name); 
          if(this.validateFile(file.size,extension)) {
            data.append('files[' + i + ']', file);
            data.append('to_user',this.friend.id) 
          }
        }
        axios.post(`send/${this.friend.session.id}`+'/upload',data,config).then( response=> {
          if(response.status == 200){
            // remove file from drop zone
            this.removeAllFiles();
            this.chats.push({
              message: 'file',
              type: 0,
              images:response.data,
              read_at: null,
              sent_at: "Just Now",
              profile:auth.profile
            });
          }else{
            this.removeAllFiles();
          }
        }); 
      }  
    },
    hideEmoji(){
        if(this.show){
          this.show=false;
        }
    },
    addLike(){
      let emoji ={"id":"+1","name":"Thumbs Up Sign","colons":":+1::skin-tone-6:","emoticons":[],"unified":"1f44d-1f3ff","skin":6,"native":"👍🏿"};
      this.message=emoji.native 
      this.send();
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
        this.$emit('order',this.friend.id);
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
      mythis =this;
      this.loading = true
      axios.post(`session/${this.friend.session.id}/chats`).then(res => {
          if(res.status==200){
            console.log(res);
              if(res.data.links.next){
                  this.next = res.data.links.next;
              }
              mythis.chats = _.reverse(res.data.data);
              mythis.loading = false
          }
      });
      // axios
      //   .post(`session/${this.friend.session.id}/chats`,{date:date})
      //   .then(res => (this.chats = res.data.data),this.loading = false);
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
        console.log(e);
        // console.log(window.auth);
        if(this.friend.id === e.chat.user_id){ 
            this.friend.session.open ? this.read() : this.friend.session.unreadCount++;  
            this.chats.push({ 
              message: e.content,
              type: 1,
              images:e.images,
              sent_at: "Just Now",
              'profile':e.profile 
            });
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
.viewer img{
  cursor: pointer;
}
.ivu-col i{
  cursor: pointer;
}
#customdropzone {
    background-color:#ffffff;
    font-family: 'Arial', sans-serif;
    letter-spacing: 0.2px;
    color: #777;
    transition: background-color .2s linear;
    height: 20px;
    /*padding: 40px; */
    text-align: center;
  }

  #customdropzone .dz-preview {
    width: 160px;
    display: inline-block
  }
 #customdropzone .dz-preview .dz-image {
    width: 80px;
    height: 80px;
    margin-left: 40px;
    margin-bottom: 10px;
  }
  #customdropzone .dz-preview .dz-image > div {
    width: inherit;
    height: inherit;
    border-radius: 50%;
    background-size: contain;
  }
  #customdropzone .dz-preview .dz-image > img {
    width: 100%;
  }

   #customdropzone .dz-preview .dz-details {
    color: white;
    transition: opacity .2s linear;
    text-align: center;
  }
  #customdropzone .dz-success-mark, .dz-error-mark, .dz-remove {
    display: none;
  }
</style>
