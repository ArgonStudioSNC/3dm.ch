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
    base: '/rendersurfer',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Vue.component( 'Home', require( './pages/Home.vue' ) )
        },
        {
            path: '/renders',
            name: 'renders',
            component: Vue.component( 'Renders', require( './pages/Renders.vue' ) )
        },
        {
            path: '/new',
            name: 'newrender',
            component: Vue.component( 'NewRender', require( './pages/NewRender.vue' ) )
        },
        {
            path: '/:id',
            name: 'render',
            component: Vue.component( 'Render', require( './pages/Render.vue' ) )
        }
    ]
});
