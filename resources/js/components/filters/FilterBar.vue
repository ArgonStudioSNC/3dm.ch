<style lang="scss">
@import '~@/abstracts/_variables.scss';

</style>

<template>
    <ul>
        <filterCategoryComponent v-for="(options, category) in filters" :key="category" v-bind:filter="{category, options}"></filterCategoryComponent>
    </ul>
</template>

<script>
import FilterCategoryComponent from './Category.vue';

export default {
    components: {
      FilterCategoryComponent,
    },

    created(){
        this.$store.dispatch( 'loadFilters' );
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        /*
        Gets the filters
        */
        filters(){
            return this.$store.getters.getFilters;
        }
    }
}

</script>
