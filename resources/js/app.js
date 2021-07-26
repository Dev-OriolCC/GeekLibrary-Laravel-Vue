import Vue from 'vue'
import App from './components/App'
import vuetify from './vuetify';
import router from './router';

require('./bootstrap');
// window.Vue = require('vue').default;
Vue.use(vuetify);

const app = new Vue({
    el: '#app',
    vuetify,
    router,
    components: {
        App
    }
});