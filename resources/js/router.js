import Home from './components/Home.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Profile from './components/Profile.vue';

import vueRouter from 'vue-router';
import Vue from 'vue';


Vue.use(vueRouter);



const routes = [{
        path: "/",
        component: Home
    },
    {
        path: "/register",
        component: Register
    },
    {
        path: "/login",
        component: Login
    },
    {
        path: '/profile',
        component: Profile

    }
];

export default new vueRouter({
    mode: "history",
    routes
});
