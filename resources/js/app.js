import Vuetify from 'vuetify';
import VeeValidate from 'vee-validate';
import store from './store/index';

require('./bootstrap');

window.Vue = require('vue');

Vue.use(Vuetify);
Vue.use(VeeValidate);
Vue.use(require('vue-moment'));

Vue.component('header-navbar', require('./components/HeaderNavbar').default);
Vue.component('footer-layout', require('./components/FooterLayout').default);
Vue.component('hero', require('./components/Hero').default);
Vue.component('assessment', require('./components/Assessment').default);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    store,
});
