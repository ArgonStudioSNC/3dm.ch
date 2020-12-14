<style lang="scss">
@import '~@/abstracts/_settings.scss';
@import '~@/mixins';

.render-grid {
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
    }
}

</style>

<template>
    <div class="render-grid" v-show="getRendersLoadStatus == 2">
        <searchBarComponent></searchBarComponent>
        <div class="masonry-wrapper">
            <div class="masonry">
                <renderCardComponent v-for="(render, key) in paginate(filteredRenders)" :key="render.id" v-bind:render="render"></renderCardComponent>
            </div>
        </div>
        <div class="grid-x align-center">
            <button class="center show-more button" v-on:click="showMore()" :disabled="showMoreTimeout || getMaxRenders >= filteredRendersLength">
                {{ __('filters.show-more') }}
            </button>
        </div>
    </div>

</template>

<script>
import SearchBarComponent from '@js/components/filters/SearchBar.vue';
import RenderCardComponent from './Card.vue';
import { RendersMixin } from '@js/mixins/renders';
import { FiltersMixin } from '@js/mixins/filters';
import { PaginationMixin } from '@js/mixins/pagination';
import { MasonryMixin } from '@js/mixins/masonry';
import _ from 'lodash';

export default {
    components: {
        SearchBarComponent,
        RenderCardComponent,
    },

    mixins: [RendersMixin, FiltersMixin, PaginationMixin, MasonryMixin],

    data () {
        return {
            showMoreTimeout : false,
        }
    },

    mounted(){
        this.$store.dispatch( 'resetMaxRenders' );
        this.$store.dispatch( 'loadRenders' );

        this.resizeAllMasonryItems;
        /* Resize all the grid items on the load and resize events */
        var masonryEvents = ['load', 'resize'];
        masonryEvents.forEach( event => {
            window.addEventListener(event, this.resizeAllMasonryItems);
        } );
    },

    methods: {
        showMore() {
            if (!this.showMoreTimeout){
                this.showMoreTimeout = true;
                this.$store.dispatch( 'showMore', 50 );
                setTimeout(() => this.showMoreTimeout = false, 300);
            }
        },
    },
}
</script>
