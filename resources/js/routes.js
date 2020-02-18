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
            name: 'layout',
            component: Vue.component( 'Layout', require( './pages/Layout.vue' ) ).default,
            children: [
                {
                    path: 'home',
                    name: 'home',
                    component: Vue.component( 'Home', require( './pages/Home.vue' ) ).default
                },
                {
                    path: 'renders',
                    name: 'renders.index',
                    component: Vue.component( 'Renders', require( './pages/RendersIndex.vue' ) ).default
                },
                {
                    path: 'renders/create',
                    name: 'renders.create',
                    component: Vue.component( 'NewRender', require( './pages/RendersCreate.vue' ) ).default
                },
                {
                    path: 'renders/:id',
                    name: 'renders.show',
                    component: Vue.component( 'Render', require( './pages/RendersShow.vue' ) ).default
                }
            ]
        }
    ]
});
