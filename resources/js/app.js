require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'

window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

import Buefy from 'buefy'
Vue.use(Buefy);

Vue.component('slug-widget', require('./components/slugWidget.vue').default);

require('./studio');