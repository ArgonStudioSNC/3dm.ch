<style lang="scss">
@import '~@/abstracts/_variables.scss';
@import "vue-select/src/scss/vue-select.scss";

</style>

<template>
    <li>
        <v-select
          multiple
          :options="filtersFromCategory"
          label="name"
          :value="activeFiltersFromCategory"
          :reduce="name => name.tag"
          @input="updateFilters"
        />
    </li>
</template>

<script>
import { FiltersMixin } from '../../mixins/filters';

export default {
    props: ['category'],

    mixins: [FiltersMixin],

    methods: {
        updateFilters(filtersArray) {
            if (filtersArray.length == 0) this.resetFilters();
            else {
                this.$router.push({ query: Object.assign({}, this.$route.query, { [this.category]: filtersArray.join('|') }) });
            }
        },

        resetFilters(){
            var urlQuery = Object.assign({}, this.$route.query);
            delete urlQuery[this.category];
            this.$router.push({ query: urlQuery});
        },
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        filtersFromCategory() {
            return this.filters[this.category]
        },

        activeFiltersFromCategory(){
            return this.activeFilters[this.category];
        },

    },
}
</script>
