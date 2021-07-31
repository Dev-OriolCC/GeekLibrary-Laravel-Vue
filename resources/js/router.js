import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
// Views
import Home from './views/public/Home';
import About from './views/public/About';
import Contact from './views/public/Contact';
import Login from './views/public/Login';
// Private
import Admin from './views/private/Admin';

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
        /**
         * Auth Routes
         */
         {
            path: '/Login',
            name: 'Login',
            component: Login,
            meta: {title: 'Login'}
        },
        {
            path: '/Login',
            name: 'Login',
            component: Login,
            meta: {title: 'Login'}
        },
        /**
         * Private Routes
         */
        {
            path: '/Admin',
            name: 'Admin',
            component: Admin,
            meta: {title: 'Admin'}
        }
    ],
    // mode: 'history',
    // hash: false,
})  