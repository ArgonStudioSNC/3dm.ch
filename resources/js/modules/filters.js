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
        offices: [],
        types: [],
        styles: [],
        seasontimes: [],
        weathers: [],
        daytimes: [],
        lights: [],
        compositions: [],
        assignements: [],
        countries: []
        
    },

    /*
    Defines the actions used to retrieve the data.
    */
    actions: {
        /*
        Loads the filters from the API
        */
        loadFilters( { commit }, name ){
            FilterAPI.find(name)
            .then( function( response ){
                commit( 'setFilters', {
                    name: name,
                    filters: response.data
                });
            })
            .catch( function(){
                commit( 'setFilters', {
                    name: name,
                    filters: []
                });
            });
        }

    },

    /*
    Defines the mutations used
    */
    mutations: {
        /*
        Sets the filters
        */
        setFilters( state, payload){
            state[payload.name] = payload.filters;
        }
    },

    /*
    Defines the getters used by the module
    */
    getters: {
        /*
        Returns the filters.
        */
        getFilters( state ){
            return name => state[name];
        }
    }
}
