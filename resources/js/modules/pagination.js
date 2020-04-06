/*
|-------------------------------------------------------------------------------
| VUEX modules/pagination.js
|-------------------------------------------------------------------------------
| The Vuex data store for the pagination of results
*/

export const pagination = {
    /*
    Defines the state being monitored for the module.
    */
    state: {
        maxRenders: 25,
    },

    /*
    Defines the actions used to retrieve the data.
    */
    actions: {
        /*
        Loads the filters from the API
        */
        showMore( { commit, state}, val ){
            commit( 'setMaxRenders', state.maxRenders + val);
        },
    },

    /*
    Defines the mutations used
    */
    mutations: {
        /*
        Sets the filters
        */
        setMaxRenders( state, val){
            state.maxRenders = val;
        },
    },

    /*
    Defines the getters used by the module
    */
    getters: {
        /*
        Returns the filters.
        */
        getMaxRenders( state ){
            return state.maxRenders;
        },
    },
}
