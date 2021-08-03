import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
// Views
import Login from './views/public/Login';
// Private
import Home from './views/public/Home';
import Admin from './views/private/Admin';
import Books from './views/private/Books';

// Actions
import Logout from './actions/Logout';

// Use
Vue.use(axios);
Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        /**
         * Public Routes
         */
        {
            path: '/Login',
            name: 'Login',
            component: Login,
            meta: {title: 'Login'}
        },
        /**
         * Auth Routes
         */
        {
            path: '/',
            name: 'Home',
            component: Home,
            meta: { title: 'Home' }
        },
        {
            path: '/Books',
            name: 'Books',
            component: Books,
            meta: { title: 'Books' }
        },
        {
            path: '/logout',
            name: 'Logut',
            component: Logout,
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