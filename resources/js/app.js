require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router';


Vue.use(VueRouter);



import routes from './router'

Vue.component('navigation', require('./components/admin/Navigation.vue').default);
Vue.component('side', require('./components/admin/Side.vue').default);
const app = new Vue({
    el: '#app',
   router: new VueRouter(routes),
});
