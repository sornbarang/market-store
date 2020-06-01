
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueChatScroll from 'vue-chat-scroll'
import { Picker } from 'emoji-mart-vue'
import { Modal,Notice,Col, Row, Avatar, Input, Icon, Badge, Card, Scroll, Spin, Dropdown, DropdownMenu, DropdownItem, Layout, Header, Menu, MenuItem, Footer, Sider } from 'iview';
import 'iview/dist/styles/iview.css';
import _ from 'lodash';
import linkify from 'vue-linkify'
import Viewer from 'v-viewer'
Vue.use(Viewer)
Vue.directive('linkified', linkify)
Vue.use(VueChatScroll);
/**
 *   
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.filter('isEmpty', function (value) {
    if (_.isObject(value)) {
        if (_.isEmpty(value)) {
            return true
        }
    }
    return false
});
Vue.component('main-chat-component', require('./components/MainChatComponent.vue'));
// import App from './components/MainChatComponent.vue';

Vue.component('Col', Col);
Vue.component('Row', Row);
Vue.component('Avatar', Avatar);
Vue.component('Input', Input);
Vue.component('Icon', Icon);
Vue.component('Badge', Badge);
Vue.component('Card', Card);
Vue.component('Scroll', Scroll);
Vue.component('Spin', Spin);
Vue.component('Dropdown', Dropdown);
Vue.component('DropdownMenu', DropdownMenu);
Vue.component('DropdownItem', DropdownItem);
Vue.component('Layout', Layout);
Vue.component('Header', Header);
Vue.component('Menu', Menu);
Vue.component('MenuItem', MenuItem);
Vue.component('Footer', Footer);
Vue.component('Sider', Sider);
Vue.component('Picker', Picker);
Vue.component('Modal', Modal);
let activeUser = localStorage.getItem('activeUser');
Vue.prototype.$activeUser = JSON.parse(activeUser);
Vue.prototype.$Notice = Notice;
const app = new Vue({
    el: '#app',
    // render: h => h(App)
});
