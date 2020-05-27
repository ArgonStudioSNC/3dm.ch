/*
|-------------------------------------------------------------------------------
| routes.js
|-------------------------------------------------------------------------------
| Contains all of the routes for the application
*/

/*
    Imports Vue and VueRouter to extend with the routes.
*/
import Vue from 'vue'
import VueRouter from 'vue-router'

/*
    Extends Vue to use Vue Router
*/
Vue.use( VueRouter )

/*
    Makes a new VueRouter that we will use to run all of the routes
    for the app.
    */
export default new VueRouter({
    mode: 'history',
    base: '/rendersurfer',
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
          return savedPosition
        } else {
          return { x: 0, y: 0 }
        }
    },
    routes: [
        {
            path: '',
            name: 'layout',
            redirect: 'search',
            component: Vue.component( 'Layout', require( './pages/Layout.vue' ) ).default,
            children: [
                {
                    path: 'search',
                    name: 'search',
                    component: Vue.component( 'RenderSearch', require( './pages/RenderSearch.vue' ) ).default
                },
                {
                    path: 'render/create',
                    name: 'render.create',
                    component: Vue.component( 'RenderCreate', require( './pages/RenderCreate.vue' ) ).default
                },
                {
                    path: 'render/:render_id',
                    name: 'render.show',
                    component: Vue.component( 'RenderSearch', require( './pages/RenderSearch.vue' ) ).default
                },
            ]
        },
    ]
});
