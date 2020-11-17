<style lang="scss">
@import '~@/abstracts/_settings.scss';

#home {
    min-height: 100vh;
}

</style>

<template>

    <div id="home" ref='home'>
        <template v-if="filtersLoadStatus == 2">
            <filterBarComponent></filterBarComponent>
            <renderGridComponent></renderGridComponent>
        </template>
        <template v-else-if="filtersLoadStatus == 3">
            Impossible de charger les filtres
        </template>
        <renderModalComponent ref='modal' ></renderModalComponent>
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

    props: ['render_id'],

    created(){
    },

    mounted() {
        this.$store.dispatch( 'loadFilters' );

        if (this.$route.name == 'renders.show') {
            this.$router.replace({name: 'search'});
            this.$store.dispatch( 'loadRender', this.render_id );

            window.addEventListener('DOMContentLoaded', (event) => {
                setTimeout(() => {
                    this.$refs.modal.openReveal();
                }, 200);
            });
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
