<style lang="scss">
@import '~@/abstracts/_variables.scss';
@import '~@/abstracts/_settings.scss';

    .filter-bar {
        .grid-container {
            max-width: 65rem;
            padding: 0;
            margin-right: 0;
        }
    }

</style>

<template>
    <div class="filter-bar">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y small-up-2 medium-up-3 large-up-4">
                <filterCategoryComponent v-for="(options, category) in filters" :key="category" v-bind:filter="{category, options}"></filterCategoryComponent>
                    <div class="cell">
                        <router-link to="/search">Go to Bar</router-link>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
import FilterCategoryComponent from './Category.vue';
import { FiltersMixin } from '../../mixins/filters';

export default {
    components: {
      FilterCategoryComponent,
    },

    mixins: [FiltersMixin],

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
