require('./bootstrap');

import Vue from 'vue'

// importing compoment
import About from './components/AboutComponent.vue'

// creating a vue instance
const app = new Vue({
    el: '#app',
    components: {
        "about-us": About
    }
});
import Vue from "vue";

import { BootstrapVue, BootstrapVueIcons } from "bootstrap-vue";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

import VueRouter from "vue-router";
import { routes } from "./admin-routes";

Vue.use(BootstrapVue);
Vue.use(BootstrapVueIcons);

Vue.use(VueRouter);

export const router = new VueRouter({
    base: "/",
    mode: "history",
    routes,
});

Vue.component(
    "admin-home",
    require("./components/AdminHomeComponent.vue").default
);

const app = new Vue({
    router,
}).$mount("#admin-app");
