<style lang="scss">
@import '~@/abstracts/_variables.scss';

.masonry-wrapper {
  padding: 1.5em;
  max-width: 100%;
  margin-right: auto;
  margin-left: auto;
}
.masonry {
  display: grid;
  grid-gap: 1em;
  grid-template-columns: repeat(1, minmax(100px,1fr));
  grid-auto-rows: 0;
}
@media only screen and (max-width: 1023px) and (min-width: 768px) {
  .masonry {
    grid-template-columns: repeat(2, minmax(100px,1fr));
  }
}
@media only screen and (min-width: 1024px) {
  .masonry {
    grid-template-columns: repeat(3, minmax(100px,1fr));
  }
}

</style>

<template>
    <div>
        <span v-show="rendersLoadStatus == 1">Loading</span>
        <span v-show="rendersLoadStatus == 2">Renders loaded successfully!</span>
        <span v-show="rendersLoadStatus == 3">Renders loaded unsuccessfully!</span>

        <div class="masonry-wrapper">
            <div class="masonry">
                <renderCardComponent v-for="(render, key) in renders" :key="render.id" v-bind:render="render"></renderCardComponent>
            </div>
        </div>

        <a class="button" v-on:click="showMore()">Show more</a>
    </div>

</template>

<script>
import RenderCardComponent from './Card.vue';
import { FiltersMixin } from '../../mixins/filters';
import { MasonryMixin } from '../../mixins/masonry';

export default {
    components: {
      RenderCardComponent,
    },

    mixins: [FiltersMixin, MasonryMixin],

    created(){
        this.$store.dispatch( 'loadRenders' );
    },

    mounted(){
        /* Resize all the grid items on the load and resize events */
        var masonryEvents = ['load', 'resize'];
        masonryEvents.forEach( event => {
            window.addEventListener(event, this.resizeAllMasonryItems);
        } );
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
