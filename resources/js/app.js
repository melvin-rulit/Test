require('./bootstrap');
window.Vue = require('vue');


import router from "./router"


// Используем плагины 
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
import { BootstrapVue, IconsPlugin} from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.component('home', require('./components/Home.vue').default);
Vue.component('reg', require('./components/Register.vue').default);
Vue.component('top', require('./components/Login.vue').default);
Vue.component('v-header', require('./components/Header.vue').default);

import Auth from './auth.js';

window.auth = new Auth();

window.Event = new Vue;
    

const app = new Vue({
    router,
    el: "#app"
  
  })

  
