/*
|-------------------------------------------------------------------------------
| VUEX modules/renders.js
|-------------------------------------------------------------------------------
| The Vuex data store for the renders
*/

import RenderAPI from '../api/render.js';

export const renders = {
    /*
    Defines the state being monitored for the module.
    */
    state: {
        renders: [],
        rendersLoadStatus: 0,

        render: {},
        renderLoadStatus: 0,

        renderAddStatus: 0
    },

    /*
    Defines the actions used to retrieve the data.
    */
    actions: {
        /*
        Loads the renders from the API
        */
        loadRenders( { commit } ){
            commit( 'setRendersLoadStatus', 1 );

            RenderAPI.all()
            .then( function( response ){
                commit( 'setRenders', response.data );
                commit( 'setRendersLoadStatus', 2 );
            })
            .catch( function(){
                commit( 'setRenders', [] );
                commit( 'setRendersLoadStatus', 3 );
            });
        },

        /*
        Loads an individual render from the API
        */
        loadRender( { commit }, renderId ){
            commit( 'setRenderLoadStatus', 1 );

            RenderAPI.show( renderId )
            .then( function( response ){
                commit( 'setRender', response.data );
                commit( 'setRenderLoadStatus', 2 );
            })
            .catch( function(){
                commit( 'setRender', {} );
                commit( 'setRenderLoadStatus', 3 );
            });
        },

        /*
        Adds a render
        */
        addRender( { commit, state, dispatch }, data ){
            commit( 'setRenderAddedStatus', 1 );

            RenderAPI.create( data.name, data.filename )
            .then( function( response ){
                commit( 'setRenderAddedStatus', 2 );
                dispatch( 'loadRenders' );
            })
            .catch( function(){
                commit( 'setRenderAddedStatus', 3 );
            });
        }
    },

    /*
    Defines the mutations used
    */
    mutations: {
        /*
        Sets the renders load status
        */
        setRendersLoadStatus( state, status ){
            state.rendersLoadStatus = status;
        },

        /*
        Sets the renders
        */
        setRenders( state, renders ){
            state.renders = renders;
        },

        /*
        Set the render load status
        */
        setRenderLoadStatus( state, status ){
            state.renderLoadStatus = status;
        },

        /*
        Set the render
        */
        setRender( state, render ){
            state.render = render;
        },

        /*
        Set the render add status
        */
        setRenderAddedStatus( state, status ){
            state.renderAddStatus = status;
        }
    },

    /*
    Defines the getters used by the module
    */
    getters: {
        /*
        Returns the renders load status.
        */
        getRendersLoadStatus( state ){
            return state.rendersLoadStatus;
        },

        /*
        Returns the renders.
        */
        getRenders( state ){
            return state.renders;
        },

        /*
        Returns the renders load status
        */
        getRenderLoadStatus( state ){
            return state.renderLoadStatus;
        },

        /*
        Returns the render
        */
        getRender( state ){
            return state.render;
        },

        /*
        Gets the render add status
        */
        getRenderAddStatus( state ){
            return state.renderAddStatus;
        }
    }
}
