require('./bootstrap');
// import 'alpinejs';

// Vue
window.Vue = require('vue').default;

// store
import store from './store/index';

// валидатор форм
import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);

// плавная прокрутка
var VueScrollTo = require('vue-scrollto');
Vue.use(VueScrollTo)

Vue.component('smpl-button', require('./components/SimpleButton.vue').default);
Vue.component('lead-form', require('./components/LeadForm.vue').default);
Vue.component('counter-up', require('./components/CounterUp.vue').default);
Vue.component('modal-image', require('./components/ModalImage.vue').default);
Vue.component('reviews-slider', require('./components/ReviewsSlider.vue').default);

const app = new Vue({
    el: '#app',
    store
});
