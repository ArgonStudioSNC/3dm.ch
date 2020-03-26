<style lang="scss">
@import '~@/abstracts/_variables.scss';

.filter-selected a {
    color: red;
}

</style>

<template>
        <li>
            <a :class="{ 'filter-active': activeFilters.length > 0 }">
                {{ __('filter-categories.'.concat(this.categorie)) }}
                <a v-if="activeFilters.length > 0" v-on:click="resetFilters()"></a>
            </a>

            <ul class="menu">
                <li  v-for="filter in filters" :class="{
                    'filter-selected': filterIsSelected(filter)
                }">
                    <a v-on:click="selectFilter(filter)">{{ filter.name }}</a>
                </li>
            </ul>
        </li>
</template>

<script>
export default {
    props: ['categorie'],

    created(){
        this.$store.dispatch( 'loadFilters' , this.categorie);
    },

    methods: {
        selectFilter(filter) {
            var activeFiltersArray = this.activeFilters.slice();
            if (!this.filterIsSelected(filter)){
                activeFiltersArray.push(filter.tag);
                this.$router.push({ query: Object.assign({}, this.$route.query, { [this.categorie]: activeFiltersArray.join('|') }) });
            } else {
                var filteredFiltersArray = activeFiltersArray.filter(function(value, index, arr){ return value != filter.tag;});
                if (filteredFiltersArray.length == 0){
                    this.resetFilters();
                } else {
                    this.$router.push({ query: Object.assign({}, this.$route.query, { [this.categorie]: filteredFiltersArray.join('|') }) });
                }
            }
        },

        resetFilters(){
            var urlQuery = Object.assign({}, this.$route.query);
            delete urlQuery[this.categorie];
            this.$router.push({ query: urlQuery});
        },

        filterIsSelected(filter){
            return this.activeFilters.includes(filter.tag);
        },
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        filters(){
            return this.$store.getters.getFilters(this.categorie);
        },

        activeFilters(){
            var filters = this.$store.state.route.query[this.categorie];
            if (filters){
                return filters.split('|');
            }
            return [];
        },
    }
}
</script>
