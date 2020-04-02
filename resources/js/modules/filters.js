/*
|-------------------------------------------------------------------------------
| VUEX modules/filters.js
|-------------------------------------------------------------------------------
| The Vuex data store for the filters
*/

import FilterAPI from '../api/filter.js';

export const filters = {
    /*
    Defines the state being monitored for the module.
    */
    state: {
        filters: [],
    },

    /*
    Defines the actions used to retrieve the data.
    */
    actions: {
        /*
        Loads the filters from the API
        */
        loadFilters( { commit } ){
            FilterAPI.all()
            .then( function( response ){
                commit( 'setFilters', response.data);
            })
            .catch( function(){
                commit( 'setFilters', [] );
            });
        },
    },

    /*
    Defines the mutations used
    */
    mutations: {
        /*
        Sets the filters
        */
        setFilters( state, filters){
            state.filters = filters;
        },
    },

    /*
    Defines the getters used by the module
    */
    getters: {
        /*
        Returns the filters.
        */
        getFilters( state ){
            return state.filters;
        },
    },
}
