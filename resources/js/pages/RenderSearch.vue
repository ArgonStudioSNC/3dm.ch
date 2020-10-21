<style lang="scss">
@import '~@/abstracts/_settings.scss';

#home {
    min-height: 100vh;
}

</style>

<template>

    <div id="home">
        <template v-if="filtersLoadStatus == 2">
            <filterBarComponent></filterBarComponent>
            <renderGridComponent></renderGridComponent>
        </template>
        <template v-else-if="filtersLoadStatus == 3">
            Impossible de charger les filtres
        </template>
        <renderModalComponent ref='modal' id='render-modal'></renderModalComponent>
    </div>

</template>

<script>
import FilterBarComponent from '../components/filters/FilterBar.vue';
import RenderGridComponent from '../components/renders/GridDisplay.vue';
import RenderModalComponent from '../components/renders/Modal.vue';

export default {
    components: {
      FilterBarComponent,
      RenderGridComponent,
      RenderModalComponent,
    },

    created(){
        this.$store.dispatch( 'loadFilters' );

        const params = this.$route.params;

        if(params.hasOwnProperty('render_id')) {
            this.$store.dispatch( 'loadRender', params.render_id );

            window.addEventListener('DOMContentLoaded', (event) => {
                setTimeout(() => {
                    $(this.$refs.modal.$el).foundation('open');
                }, 200);
            });
        }
    },

    mounted() {
        const params = this.$route.params;

        if (this.$route.name != 'search') {
            this.$router.replace({name: 'search'});
        }
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
