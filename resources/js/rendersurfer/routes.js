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
import DefaultLayout from '@js/rendersurfer/layouts/Default.vue'
import RenderFiltersLayout from '@js/rendersurfer/layouts/WithRenderFilters.vue'

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
    base: '/',
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
          return savedPosition
        } else {
          return { x: 0, y: 0 }
        }
    },
    routes: [
        {
            path: '/manager',
            component: DefaultLayout,
            children: [
                {
                    path: '',
                    name: 'manager.index',
                    redirect: 'manager.renders.new',
                },
                {
                    path: 'renders/new',
                    name: 'manager.renders.new',
                    component: Vue.component( 'RenderNew', require( '@js/rendersurfer/pages/RenderNew.vue' ) ).default
                },
                {
                    path: 'renders/:render_id/edit',
                    name: 'manager.renders.edit',
                    component: Vue.component( 'RenderEdit', require( '@js/rendersurfer/pages/RenderEdit.vue' ) ).default,
                    props: true
                },
            ]
        },
        {
            path: '',
            redirect: 'search',
            component: RenderFiltersLayout,
            children: [
                {
                    path: 'search',
                    name: 'search',
                    component: Vue.component( 'RenderSearch', require( '@js/rendersurfer/pages/RenderSearch.vue' ) ).default
                },
                {
                    path: 'renders/:render_id',
                    name: 'renders.show',
                    component: Vue.component( 'RenderSearch', require( '@js/rendersurfer/pages/RenderSearch.vue' ) ).default,
                    props: true
                },
            ]
        },
        {
            path: '/:pathMatch(.*)*',
            component: DefaultLayout,
            children: [
                {
                    path: '',
                    name: 'NotFound',
                    component: Vue.component( 'NotFound', require( '@js/rendersurfer/pages/404.vue' ) ).default
                },
            ]
        },
    ]
});
