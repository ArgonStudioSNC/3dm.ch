/*
|-------------------------------------------------------------------------------
| VUEX modules/renders.js
|-------------------------------------------------------------------------------
| The Vuex data store for the renders
*/

import RenderAPI from '../api/render.js';
import router from '../routes.js';

export const renders = {
    /*
    Defines the state being monitored for the module.
    */
    state: {
        renders: [],
        rendersLoadStatus: 0,

        render: {},
        renderLoadStatus: 0,

        renderAddStatus: 0,
        renderUpdateStatus: 0,
        renderDeleteStatus: 0
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

            RenderAPI.index()
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
        addRender( { commit, dispatch }, data ){
            commit( 'setRenderAddStatus', 1 );
            RenderAPI.store( data )
            .then( function( response ){
                commit( 'setRenderAddStatus', 2 );
                dispatch( 'loadRenders' );
                router.push({
                    name: 'search'
                });
            })
            .catch( function(){
                commit( 'setRenderAddStatus', 3 );
            });
        },

        /*
        Updates a render
        */
        updateRender( { commit, dispatch }, { render_id, data } ){
            commit( 'setRenderUpdateStatus', 1 );
            RenderAPI.update( render_id, data )
            .then( function( response ){
                commit( 'setRenderUpdateStatus', 2 );
                dispatch( 'loadRenders' );
                router.push({
                    name: 'renders.show',
                    params: {
                        render_id: render_id
                    }
                });
            })
            .catch( function(){
                commit( 'setRenderUpdateStatus', 3 );
            });
        },

        /*
        Deletes a render
        */
        deleteRender( { commit, dispatch }, render_id ){
            commit( 'setRenderDeleteStatus', 1 );
            RenderAPI.delete( render_id )
            .then( function(){
                commit( 'setRenderDeleteStatus', 2 );
                dispatch( 'loadRenders' );
                router.push({
                    name: 'search'
                });
            })
            .catch( function(){
                commit( 'setRenderDeleteStatus', 3 );
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
        setRenderAddStatus( state, status ){
            state.renderAddStatus = status;
        },

        /*
        Set the render update status
        */
        setRenderUpdateStatus( state, status ){
            state.renderUpdateStatus = status;
        },

        /*
        Set the render delete status
        */
        setRenderDeleteStatus( state, status ){
            state.renderDeleteStatus = status;
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
        },

        /*
        Gets the render update status
        */
        getRenderUpdateStatus( state ){
            return state.renderUpdateStatus;
        },

        /*
        Gets the render delete status
        */
        getRenderDeleteStatus( state ){
            return state.renderDeleteStatus;
        }
    }
}
