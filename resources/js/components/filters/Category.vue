<style lang="scss">
@import '~@/abstracts/_variables.scss';
@import "vue-select/src/scss/vue-select.scss";

</style>

<template>
    <v-select
      multiple
      :options="filter.options"
      label="name"
      :value="activeFiltersFromCategory"
      :reduce="name => name.tag"
      @input="updateFilters"

      :placeholder="__('filter-categories', filter.category)"
    />
</template>

<script>
import { FiltersMixin } from '../../mixins/filters';

export default {
    props: {
        filter: {
            type: Object,
            required: true,
        },
    },

    mixins: [FiltersMixin],

    methods: {
        updateFilters(filtersArray) {
            if (filtersArray.length == 0) this.resetFilters();
            else {
                this.$router.push({ query: Object.assign({}, this.$route.query, { [this.filter.category]: filtersArray.join('|') }) });
            }
            this.$store.dispatch( 'resetMaxRenders' );
        },

        resetFilters(){
            var urlQuery = Object.assign({}, this.$route.query);
            delete urlQuery[this.filter.category];
            this.$router.push({ query: urlQuery});
        },
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        activeFiltersFromCategory(){
            return this.activeFilters[this.filter.category];
        },

    },
}
</script>
