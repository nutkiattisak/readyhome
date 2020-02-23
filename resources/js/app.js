require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

/*import VueRouter from 'vue-router';
Vue.use(VueRouter)*/

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('dashboard', require('./components/dashboard.vue').default);
Vue.component('setting-room', require('./components/settings/SettingRoomComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
