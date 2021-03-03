require('./foundation');
require('@fortawesome/fontawesome-free/js/solid.min');
require('@fortawesome/fontawesome-free/js/fontawesome.min');

import Vue from 'vue'
import { sync } from 'vuex-router-sync'
import router from '@js/rendersurfer/routes.js'
import store from '@js/rendersurfer/store.js'

Vue.mixin(require('@js/rendersurfer/mixins/permissions'))
Vue.mixin(require('@js/rendersurfer/mixins/translator'))

const unsync = sync(store, router)

new Vue({
    router,
    store
}).$mount('#app')
