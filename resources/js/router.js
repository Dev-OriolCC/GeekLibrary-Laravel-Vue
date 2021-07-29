import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
// Views
import Home from './views/public/Home';
import About from './views/public/About';
import Contact from './views/public/Contact';

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
        {
            path: '/About',
            name: 'About',
            component: About,
            meta: { title: 'About' }
        },
        {
            path: '/Contact',
            name: 'Contact',
            component: Contact,
            meta: { title: 'Contact' }
        },
    ],
    // mode: 'history',
    // hash: false,
})  