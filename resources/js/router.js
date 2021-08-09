import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
// Views
import Login from './views/public/Login';
// Private
import Home from './views/public/Home';
import Admin from './views/private/Admin';
import Books from './views/private/Books';
import AddBook from './views/private/AddBook';
import EditBook from './views/private/EditBook';
import Profile from './views/private/Profile';
import Mails from './views/private/Mails/Mails';
import Categories from './views/private/Categories/Categories';
import EditCategory from './views/private/Categories/EditCategory';
import AddCategory from './views/private/Categories/AddCategory';
import ApiMain from './views/private/Api/ApiMain';


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
            path: '/Profile',
            name: 'Profile',
            component: Profile,
            meta: { title: 'Profile' }
        },
        // Books
        {
            path: '/Books',
            name: 'Books',
            component: Books,
            meta: { title: 'Books' }
        },
        {
            path: '/AddBook',
            name: 'AddBook',
            component: AddBook,
            meta: { title: 'Add Book' }
        },
        {
            path: '/Book/:id/Edit',
            name: 'EditBook',
            component: EditBook,
            meta: { title: 'Edit Book' }
        },
        {
            path: '/logout',
            name: 'Logut',
            component: Logout,
        },
        /**
         * Mail Routes
         */
        {
            path: '/Mails',
            name: 'Mails',
            component: Mails,
            meta: { title: 'Mail' }
        },
        /**
         * Categories Routes
         */
        {
            path: '/Categories',
            name: 'Categories',
            component: Categories,
            meta: { title: 'Categories' }
        },
        {
            path: '/Categories/:id/Edit',
            name: 'EditCategory',
            component: EditCategory,
            meta: { title: 'Edit Category' }
        },
        {
            path: '/AddCategory',
            name: 'AddCategory',
            component: AddCategory,
            meta: { title: 'Add Category' }
        },
        /**
         * Api Routes
         */
        {
            path: '/ApiMain',
            name: 'ApiMain',
            component: ApiMain,
            meta: { title: 'Api' }
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