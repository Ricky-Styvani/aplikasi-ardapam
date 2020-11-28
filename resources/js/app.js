require('./bootstrap');
require( 'jszip' );
require( 'pdfmake' );
require( 'datatables.net-buttons-bs4' )();
require( 'datatables.net-buttons/js/buttons.colVis.js' )();
require( 'datatables.net-buttons/js/buttons.flash.js' )();
require( 'datatables.net-buttons/js/buttons.html5.js' )();
require( 'datatables.net-buttons/js/buttons.print.js' )();
window.Vue = require('vue');
import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import routes from './router'
import App from './components/admin/App.vue';
import Table from './views/admin/users/karyawan/datatable.vue';
import Toasted from 'vue-toasted';
import 'vue-awesome/icons';
import Icon from 'vue-awesome/components/Icon';


 
Vue.component ('v-icon',Icon); 
Vue.component ('v-table',Table); 
Vue.use(Toasted);
window.Vue.use(VueRouter,VueAxios);
Vue.prototype.axios = axios;



const app = new Vue({
    el: '#app',
   router: new VueRouter(routes),
   render: h => h(App),
  
   
});
