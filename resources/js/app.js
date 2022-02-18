/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 
 require('./bootstrap');
 import Vue from 'vue'
 import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
 import App from './components/App.vue';
 import VueAxios from 'vue-axios';
 import VueRouter from 'vue-router';
 import { routes } from './routes';
 Vue.use(BootstrapVue)
 Vue.use(IconsPlugin)
 Vue.use(VueRouter);
 Vue.use(VueAxios, axios);
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