<style lang="scss">
@import '~@/abstracts/_variables.scss';

</style>

<template>
        <li>
            <a>{{ this.filterName }}</a>
            <ul class="menu">
                <li v-for="filter in filters">{{ filter.name }}</li>
            </ul>
        </li>
</template>

<script>
export default {
    props: ['filterName'],

    created(){
        this.$store.dispatch( 'loadFilters' , this.filterName);
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        /*
        Gets the renders load status
        */
        filters(){
            return this.$store.getters.getFilters(this.filterName);
        },

        actives(){
            var activeFilters = this.$store.state.route.query[this.filterName];
            if (activeFilters){
                return activeFilters.split('|');
            }
            return [];
        }
    }
}
</script>
