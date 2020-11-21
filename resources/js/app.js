require('./bootstrap');
window.Vue = require('vue');

//Импортируем собственный файл с Роутами
import router from "./router"

// Используем глобально плагин vue-the-mask 
import VueTheMask from 'vue-the-mask'
Vue.use(VueTheMask)
//END

// Используем плагин bootstrap-vue
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
import { BootstrapVue, IconsPlugin} from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
//END

// Регестрируем компоненты глобально
Vue.component('home', require('./components/Home.vue').default);
Vue.component('reg', require('./components/Register.vue').default);
Vue.component('top', require('./components/Login.vue').default);
Vue.component('v-header', require('./components/Header.vue').default);
//END

//Импортируем собственный файл по работе с сохранением данных в Хранилище
import Auth from './auth.js';
window.auth = new Auth();
window.Event = new Vue;
    

const app = new Vue({
    router,
    el: "#app"
  
  })

  
