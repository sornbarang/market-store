<template> 
    <div class="grid"> 
        <div @click="hideEmoji" v-show="show" style="position: absolute;z-index: 8; width: 100vw;height: 100vh;"></div>
        <div class="header border-bottom">
            <div class="left d-flex content-justify-center align-items-center">
                <Row type="flex" justify="start" align="middle" class-name="w-100">
                    <Col span="18" push="6" class-name="pr-2">Messenger</Col>
                    <Col span="6" pull="18"  align="center"><Avatar size="large"  src="https://i.loli.net/2017/08/21/599a521472424.jpg" /></Col>
                </Row>
            </div>
            <div class="center d-flex content-justify-center align-items-center"> 
                <Row class-name="text-center w-100"> 
                    <Col span="24">
                        <h5 v-if="friend!=null" v-text="friend.name"></h5>  
                    </Col> 
                    <Col span="24">
                        <p v-if="friend!=null" v-text="friend.email"></p>
                    </Col> 
                </Row>
            </div>    
            <div class="right d-flex content-justify-center align-items-center">
                <Row type="flex" justify="end" align="middle" class-name="w-100">
                    <Col span="6" push="18" class-name="pr-2">
                        <Avatar size="large"  src="https://i.loli.net/2017/08/21/599a521472424.jpg" />
                    </Col>
                    <Col span="18" pull="6" align="end" class-name="pr-2">
                        <Dropdown trigger="click">
                            <a href="javascript:void(0)" class="text-capitalize">
                                <Icon type="md-cog" :size="18"/> &nbsp; {{auth.name}}
                            </a>
                            <DropdownMenu slot="list">
                                <DropdownItem align="center" @click.native="getLogout">Logout</DropdownItem>
                            </DropdownMenu>
                        </Dropdown>
                    </Col>
                </Row>
            </div>
        </div>
        <div class="content-wraper">
            <div class="left">
                <Sider>
                    <Row class-name="pl-2 pr-2 border-bottom">
                        <Col span="24" class-name="pb-2 pt-2"> 
                            <Input prefix="ios-search" clearable v-model="searchStr" placeholder="Enter text" element-id="no-border"></Input> 
                        </Col> 
                    </Row>
                    <Row class-name="main-scroll-container">
                        <Col span="24">
                            <Scroll :on-reach-bottom="handleReachBottom">
                                <Row  @click.native="openChat(friend)" :key="friend.id" v-for="friend in friends" class-name="p-2 c-user">
                                    <Col span="4"> 
                                        <Badge overflow-count="9999" :count="friend.session.unreadCount"  type="error" v-if="friend.session && (friend.session.unreadCount > 0)"> 
                                            <Avatar src="https://i.loli.net/2017/08/21/599a521472424.jpg" /> 
                                        </Badge>
                                        <Badge  :count="0" type="error" v-else> 
                                            <Avatar src="https://i.loli.net/2017/08/21/599a521472424.jpg" /> 
                                        </Badge>
                                    </Col> 
                                    <Col span="20" class-name="pl-1"> 
                                        <Row>
                                            <Col span="20">
                                                <h6 class="font-weight-bold text-truncate text-capitalize">{{friend.name}}</h6>
                                            </Col>
                                            <Col span="4" class-name="text-right">
                                                <Badge status="processing" v-if="friend.online" />
                                            </Col>
                                        </Row>
                                        <Row>
                                            <Col span="24">
                                                <h6 class="btn-sm p-0 m-0 lightgray">Keep forward</h6>
                                            </Col> 
                                        </Row>
                                    </Col> 
                                </Row>
                            </Scroll>
                        </Col>
                    </Row>
                </Sider>
                <!-- <div v-for="i in 200" :key="i">item</div> -->
            </div>
            <div class="center border-left border-right">  
                <send-message-component v-if="friend!=null" @close="close(friend)" :friend="friend"></send-message-component>
                <div v-else class="w-100 h-100 d-flex justify-content-center align-items-center" ><Icon color="#0000001f" :size="100" type="ios-send-outline" /></div> 
            </div>    
            <div class="right">
                <Row class-name="pl-2 pr-2 pt-2 c-right-container">
                    <Card :bordered="false" :padding="0" :dis-hover="true">
                        <div class="text-center">
                            <Avatar size="large" src="https://i.loli.net/2017/08/21/599a521472424.jpg" />
                            <h4 class="m-0 pt-1">Vitou 2</h4>
                            <p class="m-0 p-0">messenger</p>
                        </div>
                    </Card>
                    <Row>
                        <Col span="24" class-name="p-2">Shared photos</Col>
                        <Col span="12" v-for="i in 5" :key="i">
                            <Card :bordered="false" :padding="0" :dis-hover="true">
                                <div style="text-align:center">
                                    <img class="img-fluid" alt="Responsive image" src="https://file.iviewui.com/dist/2ecd3b0452aa197097d5131afacab7b8.png">
                                </div>
                            </Card>
                        </Col>
                        
                    </Row>
                </Row>
            </div>    
        </div> 
    </div>
</template>
<script>
    export default {
        data () {
            return { 
                show:false,
                value:'',
                btnsend:false,
                friends: [],
                friend:null,
                searchStr:''
            }
        }, 
        computed: {
            auth: function () {
                return window.auth
            }
        },
        watch:{
            searchStr(val,oldVal){
                // console.log('new: %s, old: %s', val, oldVal);
                if(val){
                    axios.get('/search').then(res=>{
                        console.log(res);
                    });
                }
            }
        },
        methods: { 
            getLogout(){
                axios.post("logout").then(res => {
                    if(res.status==200){
                        location.reload();
                    }
                });
                // console.log(window.axios.defaults.headers.common['X-CSRF-TOKEN']);
            },
            keyup(){ 
                if(this.value!=''){
                    this.btnsend=true
                }else{
                    this.btnsend=false
                }
            },
            keyenter(event){
                console.log(this.value);
                // console.log(event.target.value);
            },
            handleReachBottom () {
                // return new Promise(resolve => {
                //     setTimeout(() => {
                //         const last = this.list1[this.list1.length - 1];
                //         for (let i = 1; i < 11; i++) {
                //             this.list1.push(last + i);
                //         }
                //         resolve();
                //     }, 2000);
                // });
            },
            hideEmoji(){ 
                if(this.show){
                    this.show=false;
                }
            },
            addEmoji(emoji){  
                this.value +=emoji.native;
            },
            close(friend) {
                friend.session.open = false;
            },
            getFriends() {
                axios.post("getFriends").then(res => {
                    this.friends = res.data.data;
                    this.friends.forEach(
                        friend => (friend.session ? this.listenForEverySession(friend) : "")
                    );
                }); 
            },
            openChat(friend) { 
                if (friend.session) {
                    this.friends.forEach(
                        friend => (friend.session ? (friend.session.open = false) : "")
                    );
                    friend.session.open = true;
                    friend.session.unreadCount = 0;
                    this.friend=friend
                   
                } else {
                    this.createSession(friend);
                }
            },
            createSession(friend) {
                axios.post("session/create", { friend_id: friend.id }).then(res => {
                    (friend.session = res.data.data), (friend.session.open = true);
                });
            },
            listenForEverySession(friend) {
                Echo.private(`Chat.${friend.session.id}`).listen(
                    "PrivateChatEvent",
                    e => (friend.session.open ? "" : friend.session.unreadCount++)
                );
            }
        },
        created() {
            this.getFriends();
            Echo.channel("Chat").listen("SessionEvent", e => {
                let friend = this.friends.find(friend => friend.id == e.session_by);
                friend.session = e.session;
                this.listenForEverySession(friend);
            });

            Echo.join(`Chat`)
                .here(users => {
                    this.friends.forEach(friend => {
                    users.forEach(user => {
                        if (user.id == friend.id) {
                        friend.online = true;
                        }
                    });
                });
            })
            .joining(user => {
                this.friends.forEach(
                friend => (user.id == friend.id ? (friend.online = true) : "")
                );
            })
            .leaving(user => {
                this.friends.forEach(
                friend => (user.id == friend.id ? (friend.online = false) : "")
                );
            });
        },
    }
</script>
<style lange="css">
.lightgray{
    color: rgba(153, 153, 153, 1);
}
.c-user:hover{
    background:#f2f2f2;
    cursor: pointer;
}
.c-user.active{
    background:#f2f2f2;
}
.grid {
  box-sizing: border-box; 
  height: 100vh; 
  width: 100vw;
}
#no-border{
        border:none;
    }
    #no-border:focus,#no-border:active{
        box-shadow:inherit;
    }
.ivu-layout-sider{
        background:#fff !important;
    }
.content-wraper { 
  height: 90vh;
}

.header { 
  height: 10vh;
}
.header > .center{
    width:60vw; 
    height: 10vh; 
    float:left;
}
.header > .left{ 
  width: 20vw;
  height: 10vh; 
  float:left; 
}
.header > .right{ 
    width: 20vw;
    height: 10vh; 
    float:left; 
}
.content-wraper > .center{
    width:60vw; 
    height: 90vh; 
    float:left;
}
.content-wraper > .left{ 
  width: 20vw;
  height: 90vh; 
  float:left; 
}
.content-wraper > .right{ 
    width: 20vw;
    height: 90vh; 
    float:left;
    overflow-y: auto;
}
.chat-body{
    height:82vh;
    width: 60vw; 
    overflow-y: auto;
} 
.send-box{
    height:8vh;
    width: 60vw; 
}
.ivu-layout-sider{
    width:100% !important;
    min-width: inherit !important;
    max-width: inherit !important;
    flex: inherit !important;
}
.ivu-scroll-container {
    height: 82vh !important;
    overflow-y: auto !important;
}
/* width */
::-webkit-scrollbar {
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track { 
    border-radius: 2px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #56a72d; 
    border-radius: 2px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #56a72d; 
}
.color-green{
    color:#56a72d;
}
</style>