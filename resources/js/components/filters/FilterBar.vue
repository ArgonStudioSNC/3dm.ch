<style lang="scss">
@import '~@/abstracts/_variables.scss';

</style>

<template>
    <ul>
        <categoryComponent v-for="(category, key) in filterCategories" v-bind:key="key" v-bind:category="category"></categoryComponent>
    </ul>
</template>

<script>
import CategoryComponent from './Category.vue';

export default {
    components: {
      CategoryComponent,
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
        filterCategories(){
            return Object.keys(this.$store.getters.getFilters);
        }
    }
}

</script>
