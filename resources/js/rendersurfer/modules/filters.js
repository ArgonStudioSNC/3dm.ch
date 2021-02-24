/*
|-------------------------------------------------------------------------------
| VUEX modules/filters.js
|-------------------------------------------------------------------------------
| The Vuex data store for the filters
*/

import FilterAPI from '@js/rendersurfer/api/filter.js';

export const filters = {
    /*
    Defines the state being monitored for the module.
    */
    state: {
        filters: [],
        filtersLoadStatus: 0,
    },

    /*
    Defines the actions used to retrieve the data.
    */
    actions: {
        /*
        Loads the filters from the API
        */
        loadFilters( { commit } ){
            commit( 'setFiltersLoadStatus', 1 );
            FilterAPI.index()
            .then( function( response ){
                commit( 'setFilters', response.data);
                commit( 'setFiltersLoadStatus', 2 );
            })
            .catch( function(){
                commit( 'setFilters', [] );
                commit( 'setFiltersLoadStatus', 3 );
            });
        },
    },

    /*
    Defines the mutations used
    */
    mutations: {
        /*
        Sets the filters load status
        */
        setFiltersLoadStatus( state, status ){
            state.filtersLoadStatus = status;
        },

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
        Returns the filters load status.
        */
        getFiltersLoadStatus( state ){
            return state.filtersLoadStatus;
        },

        /*
        Returns the filters.
        */
        getFilters( state ){
            return state.filters;
        },
    },
}
