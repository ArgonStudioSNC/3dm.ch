<style lang="scss">
@import '~@/abstracts/_settings.scss';

.render-grid {
    margin-top: 4em;
    .match-result span{
        font-weight: $global-weight-bold;
    }
    .masonry-wrapper {
        margin-top: 0.8em;
        margin-bottom: 3em;
        max-width: 100%;
        margin-right: auto;
        margin-left: auto;
    }
    .masonry {
        display: grid;
        grid-gap: 1em;
        grid-template-columns: repeat(1, minmax(100px,1fr));
        grid-auto-rows: 0;

        @include breakpoint(medium) {
            grid-template-columns: repeat(2, minmax(100px,1fr));
        }
        @include breakpoint(large) {
            grid-template-columns: repeat(3, minmax(100px,1fr));
        }
        @include breakpoint(xlarge) {
            grid-template-columns: repeat(4, minmax(100px,1fr));
        }
        @include breakpoint(xxlarge) {
            grid-template-columns: repeat(5, minmax(100px,1fr));
        }
    }
    .show-more {
        min-width: 260px;
        background-color: $primary-color;
        padding-top: 0.4em;
        padding-bottom: 0.4em;
        line-height: inherit;
        font-size: inherit;
        font-weight: inherit;
    }
}

</style>

<template>
    <div class="render-grid" v-show="rendersLoadStatus == 2">
        <div class="match-result grid-x align-right">
            <span>{{ filtredRendersLength }}</span>&nbsp;{{ trans_choice("search.render_match_result", filtredRendersLength) }}
        </div>
        <div class="masonry-wrapper">
            <div class="masonry">
                <renderCardComponent v-for="(render, key) in paginatedFiltredRenders" :key="render.id" v-bind:render="render"></renderCardComponent>
            </div>
        </div>
        <div class="grid-x align-center">
            <button class="center show-more button" v-on:click="showMore()" :disabled="maxRenders >= filtredRendersLength">
                {{ __('filters.show-more') }}
            </button>
        </div>
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
        this.resizeAllMasonryItems;
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

        maxRenders() {
            return this.$store.getters.getMaxRenders;
        },

        filtredRenders(){
            var resultRenders = Object.assign({}, this.$store.getters.getRenders);

            for (var cat in this.activeFilters){
                for (var renderKey in resultRenders) {
                    if (!this.filterCategoryByTag(resultRenders[renderKey], cat, this.activeFilters[cat])) {
                        delete resultRenders[renderKey];
                    }
                }
            }
            return resultRenders;
        },

        filtredRendersLength() {
            return Object.keys(this.filtredRenders).length;
        },

        paginatedFiltredRenders() {
            const sliced = Object.keys(this.filtredRenders).slice(0, this.maxRenders).reduce((result, key) => {
                                result[key] = this.filtredRenders[key];
                                return result;
                            }, {});
            return sliced;
        },
    },

    methods: {
        showMore(){
            this.$store.dispatch( 'showMore', 50 );
        },
    },
}
</script>
