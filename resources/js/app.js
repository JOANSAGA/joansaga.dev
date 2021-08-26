require('./bootstrap');

import Vue from 'vue';

Vue.component('simple-card', require('./components/simple-card.vue').default);

const app = new Vue({
    el: '#app',
    data: {},
    methods: {},
    watch: {},
    created: function () {}
});
