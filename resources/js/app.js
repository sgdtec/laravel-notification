
require('./bootstrap');
import store from './vuex/store'

window.Vue = require('vue');

// Component
Vue.component('notifications', require('./components/notifications/NotificationsComponent.vue').default);
Vue.component('Notification', require('./components/notifications/Notification.vue').default);

const app = new Vue({
    store,
    el: '#app',
});
