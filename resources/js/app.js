require('./bootstrap');
require('./studio');
require('./manage');

window.Vue = require('vue');
import Vue from 'vue'

import Buefy from 'buefy'
import 'buefy/dist/buefy.css'

Vue.use(Buefy);

Vue.component(Buefy.Radio.name, Buefy.Radio);
var app = new Vue({
    el: '#app',
    data: {}
});
