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
    routes: [
        {
            path: '*',
            name: 'catch-all',
            redirect: '/',
        },
        {
            path: '/',
            name: 'layout',
            redirect: 'search',
            component: Vue.component( 'Layout', require( './pages/Layout.vue' ) ).default,
            children: [
                {
                    path: 'search',
                    name: 'renders.search',
                    component: Vue.component( 'Renders', require( './pages/RendersSearch.vue' ) ).default
                },
                {
                    path: 'renders/create',
                    name: 'renders.create',
                    component: Vue.component( 'NewRender', require( './pages/RendersCreate.vue' ) ).default
                },
                {
                    path: 'renders/:id',
                    name: 'renders.show',
                    //component: Vue.component( 'Render', require( './pages/RendersShow.vue' ) ).default
                },
            ]
        },
    ]
});
