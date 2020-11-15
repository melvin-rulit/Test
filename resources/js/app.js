// todo Файл app.js будет загружать файл resources/js/bootstrap.js, который загружает и настраивает Vue, Axios, jQuery, а также все остальные JavaScript-зависимости. Если вам надо настроить дополнительные JavaScript-зависимости, вы можете сделать это в данном файле.


require('./bootstrap');
window.Vue = require('vue');

import { BootstrapVue, IconsPlugin} from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import router from "./router"


// Используем плагины 
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.component('home', require('./components/Home.vue').default);
Vue.component('reg', require('./components/Register.vue').default);
Vue.component('top', require('./components/Login.vue').default);
Vue.component('v-header', require('./components/Header.vue').default);
Vue.component('v-app', require('./components/App.vue').default);

import Auth from './auth.js';

window.auth = new Auth();

window.Event = new Vue;
    

const app = new Vue({
    router,
    el: "#app"
  
  }).$mount('#app')