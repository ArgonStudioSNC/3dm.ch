<style lang="scss">
@import '~@/abstracts/_variables.scss';

.filter-selected a {
    color: red;
}

</style>

<template>
        <li>
            <a>{{ this.filterName }}
                <a v-if="actives.length > 0" v-on:click="cleanFilters()"></a>
            </a>

            <ul class="menu">
                <li  v-for="filter in filters":class="{
                    'filter-selected': filterIsSelected(filter)
                }">
                    <a v-on:click="click(filter)">{{ filter.name }}</a>
                </li>
            </ul>
        </li>
</template>

<script>
export default {
    props: ['filterName'],

    created(){
        this.$store.dispatch( 'loadFilters' , this.filterName);
    },

    methods: {

        click(filter) {
            if (this.filterIsSelected(filter)){
                var activeFilters = this.actives;
                var filtered = activeFilters.filter(function(value, index, arr){ return value != filter.tag;});
                if (filtered.length == 0){
                    this.cleanFilters();
                } else {
                    this.$router.push({ query: Object.assign({}, this.$route.query, { [this.filterName]: filtered.join('|') }) });
                }

            } else {
                var activeFilters = this.actives;
                activeFilters.push(filter.tag);
                this.$router.push({ query: Object.assign({}, this.$route.query, { [this.filterName]: activeFilters.join('|') }) });
            }
        },

        cleanFilters(){
            var myQuery = Object.assign({}, this.$route.query);
            delete myQuery[this.filterName];
            this.$router.push({ query: myQuery});
        },

        filterIsSelected(filter){
            return this.actives.includes(filter.tag);
        },
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
        },
    }
}
</script>
