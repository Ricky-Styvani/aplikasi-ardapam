require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import routes from './router'
import App from './components/admin/App.vue';
import Toasted from 'vue-toasted';
import 'vue-awesome/icons';
import Icon from 'vue-awesome/components/Icon';

import BootstrapVue from 'bootstrap-vue';
//import  Pagination  from 'bootstrap-vue';
Vue.component('vue-pagination', require('laravel-vue-pagination'));


//Vue.use(Pagination);
//Vue.use( BootstrapVue);
 
Vue.component ('v-icon',Icon); 
Vue.use(Toasted);
window.Vue.use(VueRouter,VueAxios);
Vue.prototype.axios = axios;



const app = new Vue({
    el: '#app',
   router: new VueRouter(routes),
   render: h => h(App),
   
});
