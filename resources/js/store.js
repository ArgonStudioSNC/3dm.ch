/*
|-------------------------------------------------------------------------------
| VUEX store.js
|-------------------------------------------------------------------------------
| Builds the data store from all of the modules for the Rendersurfer app.
*/
/*
  Adds the promise polyfill for IE 11
*/
require('es6-promise').polyfill();

/*
    Imports Vue and Vuex
*/
import Vue from 'vue'
import Vuex from 'vuex'

/*
    Initializes Vuex on Vue.
*/
Vue.use( Vuex )

/*
    Imports all of the modules used in the application to build the data store.
*/
import { renders } from '@js/modules/renders.js'
import { filters } from '@js/modules/filters.js'
import { pagination } from '@js/modules/pagination.js'
import { permissions } from '@js/modules/permissions.js'

/*
  Exports our data store.
*/
export default new Vuex.Store({
    modules: {
        renders,
        filters,
        pagination,
        permissions
    }
});
