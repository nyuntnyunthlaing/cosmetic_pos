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