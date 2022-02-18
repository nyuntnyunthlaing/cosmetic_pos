
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 import {
     Form , Errors
    } from 'vform'
import Swal from 'sweetalert2';

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
// Vue.component(Errors.name, Errors);
 window.Vue = require('vue');
 import Vue from "vue";
 import App from './components/App.vue';
 import VueAxios from 'vue-axios';
 import VueRouter from 'vue-router';
 import axios from 'axios';
 import { routes } from './routes';

 import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';


import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';


Vue.use(BootstrapVue);

Vue.use(IconsPlugin);
 
 Vue.use(VueRouter);
 Vue.use(VueAxios, axios);
 
 window.Form =Form;
 window.Swal = Swal;
 window.Toast = Toast;
 
 Vue.component('about-us', require('./components/AboutComponent.vue').default);
 const router = new VueRouter({
     mode: 'history',
     routes: routes
 });
 
 const app = new Vue({
     el: '#app',
     router: router,
     render: h => h(App),
 });