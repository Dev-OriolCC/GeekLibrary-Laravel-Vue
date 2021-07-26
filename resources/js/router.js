import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
// Views
import Home from './views/public/Home'

// Use
Vue.use(axios);
Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        /**
         * Public Routes
         */
        {
            path: '/',
            name: 'Home',
            component: Home,
            meta: { title: 'Home' }
        },
    ],
    // mode: 'history',
    // hash: false,
})