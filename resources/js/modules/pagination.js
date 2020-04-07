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
        Resets the number of renders shown
        */
        resetMaxRenders( { commit } ){
            commit( 'setMaxRenders', 25);
        },

        /*
        Increase the number of renders shown
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
        Sets the maximum number of renders shown
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
        Returns the maximum number of renders shown.
        */
        getMaxRenders( state ){
            return state.maxRenders;
        },
    },
}
