
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
import pagination from 'laravel-vue-pagination'
import HighchartsVue from 'highcharts-vue'
import router from './routes'
import Vue from 'vue'
//import vSelect from 'vue-select'
//Vue.component('v-select', vSelect);
import swal from 'sweetalert2';



Vue.use(VueRouter);
Vue.component('pagination', pagination);
Vue.use(HighchartsVue);

window.swal = swal;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
