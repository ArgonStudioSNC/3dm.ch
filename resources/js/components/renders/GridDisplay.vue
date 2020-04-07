<style lang="scss">
@import '~@/abstracts/_variables.scss';

</style>

<template>
    <div>
        <span v-show="rendersLoadStatus == 1">Loading</span>
        <span v-show="rendersLoadStatus == 2">Renders loaded successfully!</span>
        <span v-show="rendersLoadStatus == 3">Renders loaded unsuccessfully!</span>

        <div>
            <renderCardComponent v-for="(render, key) in renders" :key="render.id" v-bind:render="render"></renderCardComponent>
        </div>

        <a class="button" v-on:click="showMore()">Show more</a>
    </div>

</template>

<script>
import RenderCardComponent from './Card.vue';
import { FiltersMixin } from '../../mixins/filters';

export default {
    components: {
      RenderCardComponent,
    },

    mixins: [FiltersMixin],

    created(){
        this.$store.dispatch( 'loadRenders' );
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        /*
        Gets the renders load status
        */
        rendersLoadStatus(){
            return this.$store.getters.getRendersLoadStatus;
        },

        /*
        Gets the renders
        */
        renders(){
            return this.paginate( this.applyFilters(this.$store.getters.getRenders, this.activeFilters), this.$store.getters.getMaxRenders);
        },
    },

    methods: {
        applyFilters(renders, activeFilters) {
            var resultRenders = Object.assign({}, renders);

            for (var cat in activeFilters){
                for (var renderKey in resultRenders) {
                    if (!this.filterCategoryByTag(resultRenders[renderKey], cat, activeFilters[cat])) {
                        delete resultRenders[renderKey];
                    }
                }
            }
            return resultRenders;
        },

        paginate(renders, max) {
            const sliced = Object.keys(renders).slice(0, max).reduce((result, key) => {
                                result[key] = renders[key];
                                return result;
                            }, {});
            return sliced;
        },

        showMore(){
            this.$store.dispatch( 'showMore', 50 );
        },
    },

}
</script>
