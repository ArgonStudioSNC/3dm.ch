<style lang="scss">
@import '~@/abstracts/_settings.scss';

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
    </div>

</template>

<script>
import FilterBarComponent from '../components/filters/FilterBar.vue';
import RenderGridComponent from '../components/renders/GridDisplay.vue';

export default {
    components: {
      FilterBarComponent,
      RenderGridComponent,
    },

    created(){
        this.$store.dispatch( 'loadFilters' );
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        /*
        Gets the renders load status
        */
        filtersLoadStatus(){
            return this.$store.getters.getFiltersLoadStatus;
        },
    },
}

</script>
