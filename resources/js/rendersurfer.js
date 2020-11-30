window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');

    require('foundation-sites');
} catch (e) {}

$(function(){
    $('body').css('display', 'block');
});

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue'
import { sync } from 'vuex-router-sync'
import router from '@js/routes.js'
import store from '@js/store.js'

Vue.mixin(require('@js/mixins/permissions'))
Vue.mixin(require('@js/mixins/translator'))

const unsync = sync(store, router)

new Vue({
    router,
    store
}).$mount('#app')
