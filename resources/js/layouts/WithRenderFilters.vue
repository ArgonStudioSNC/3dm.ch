<style lang="scss">
@import '~@/abstracts/_settings.scss';

#render-filters-layout {
    margin-top: 1.5em;
    .layout-header {
        margin-bottom: 4em;
    }
}

.logo {
    padding-bottom: 1.5em;
    display: block;
    max-width: 200px;
    height: auto;
}

</style>

<template>
    <div id="render-filters-layout">
        <div class="layout-header grid-container full">
            <div class="grid-x">
                <div class="cell large-3">
                    <a class="logo" href="/">
                        <img :src="image_src">
                    </a>
                </div>
                <div class="cell large-auto">
                    <filterBarComponent v-if="filtersLoadStatus == 2"></filterBarComponent>
                    <span v-else-if="filtersLoadStatus == 3">{{ __('filters.loading-error') }}</span>
                </div>
            </div>
        </div>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
import FooterComponent from '@js/components/global/Footer.vue';
import AuthAPI from '@js/api/auth.js';
import FilterBarComponent from '@js/components/filters/FilterBar.vue';

export default {
    components: {
      FooterComponent,
      FilterBarComponent,
    },

    data () {
        return {
            image_src: '/media/branding/3dm-logo-normal.svg',
        }
    },

    mounted () {
        this.$store.dispatch( 'loadPermissions' );
        this.$store.dispatch( 'loadRoles' );
        this.$store.dispatch( 'loadFilters' );
    },

        /*
        Defines the computed properties on the component.
        */
        computed: {
            /*
            Gets the renders load status
            */
            filtersLoadStatus: function(){
                return this.$store.getters.getFiltersLoadStatus;
            },
        },
}
</script>
