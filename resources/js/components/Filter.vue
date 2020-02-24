<style lang="scss">
@import '~@/abstracts/_variables.scss';

</style>

<template>
    <div>
        <ul>
            <li v-for="filter in filters">{{ filter.name }}</li>
        </ul>
        
        <ul>
            <li v-for="active in actives">{{ active }}</li>
        </ul>
    </div>
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
