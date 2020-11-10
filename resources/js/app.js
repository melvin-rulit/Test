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
    
    

const app = new Vue({
    router,
    el: "#app"
  
  }).$mount('#app')