/*
|-------------------------------------------------------------------------------
| VUEX modules/permissions.js
|-------------------------------------------------------------------------------
| The Vuex data store for the permissions and roles
*/

import AuthAPI from '@js/rendersurfer/api/auth.js';

export const permissions = {
    /*
    Defines the state being monitored for the module.
    */
    state: {
        permissions: [],
        permissionsLoadStatus: 0,

        roles: [],
        rolesLoadStatus: 0
    },

    /*
    Defines the actions used to retrieve the data.
    */
    actions: {
        loadPermissions( { commit } ){
            commit( 'setPermissionsLoadStatus', 1 );

            AuthAPI.permissions()
            .then( function( response ){
                commit( 'setPermissions', response.data );
                commit( 'setPermissionsLoadStatus', 2 );
            })
            .catch( function(){
                commit( 'setPermissions', [] );
                commit( 'setPermissionsLoadStatus', 3 );
            });
        },

        loadRoles( { commit } ){
            commit( 'setRolesLoadStatus', 1 );

            AuthAPI.roles()
            .then( function( response ){
                commit( 'setRoles', response.data );
                commit( 'setRolesLoadStatus', 2 );
            })
            .catch( function(){
                commit( 'setRoles', [] );
                commit( 'setRolesLoadStatus', 3 );
            });
        }
    },

    /*
    Defines the mutations used
    */
    mutations: {
        setPermissionsLoadStatus( state, status ){
            state.permissionsLoadStatus = status;
        },

        setPermissions( state, status ){
            state.permissions = status;
        },

        setRolesLoadStatus( state, status ){
            state.rolesLoadStatus = status;
        },

        setRoles( state, status ){
            state.roles = status;
        }
    },

    /*
    Defines the getters used by the module
    */
    getters: {
        getPermissionsLoadStatus( state ){
            return state.permissionsLoadStatus;
        },

        getPermissions( state ){
            return state.permissions;
        },

        getRolesLoadStatus( state ){
            return state.rolesLoadStatus;
        },

        getRoles( state ){
            return state.roles;
        }
    }
}
