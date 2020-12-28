/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter);

Vue.component('pagination', require('laravel-vue-pagination'));

/* import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios); */


import Home from './components/HomeComponent.vue';
import Product from './components/ProductComponent.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/products', component: Product }
];
const router = new VueRouter({ mode: 'history', routes: routes });

//Vue.component('home-component', require('./components/HomeComponent.vue').default);


const app = new Vue({
    el: '#app',
    router,
});
