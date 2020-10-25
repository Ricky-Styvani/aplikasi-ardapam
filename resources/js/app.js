require('./bootstrap');
window.Vue = require('vue');
import FontAwesomeIcon from '@fortawesome/fontawesome-free'
import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import routes from './router'
import App from './components/admin/App.vue';

window.Vue.use(VueRouter,VueAxios);
Vue.prototype.axios = axios;
Vue.component('font-awesome-icon', FontAwesomeIcon)


//Vue.component('navigation', require('./components/admin/Navigation.vue').default);
//Vue.component('side', require('./components/admin/Side.vue').default);
//Vue.component('app', require('./components/admin/App.vue').default);
const app = new Vue({
    el: '#app',
   router: new VueRouter(routes),
   render: h => h(App),
   
});
