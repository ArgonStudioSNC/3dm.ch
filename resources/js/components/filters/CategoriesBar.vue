<style lang="scss">
@import '~@/abstracts/_settings.scss';

    .categories-bar {

        .grid-container {
            max-width: 1050px;
            margin-right: 0;
            padding: 0;
        }

        .filter-reset-button {
            box-sizing: content-box;
            display: block;
            position: relative;
            width: 100%;
            text-align: left;
            font-size: 14px;
            line-height: inherit;
            min-height: 1.75em;
            background-color: $secondary-color;
            color: $black;
            font-weight: inherit;

            span {
                padding: 0.3em 0 0.3em 1.2em;
                display: block;

                &:hover {
                    cursor: pointer;
                }
            }
        }
    }

</style>

<template>
    <div class="categories-bar">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y small-up-2 medium-up-3 large-up-4">
                <filterCategoryComponent v-for="(options, category) in filters" :key="category" v-bind:filter="{category, options}"></filterCategoryComponent>
                <div class="cell">
                    <router-link class="filter-reset-button" to="/search" v-on:click.native="resetMaxRenders" tag="button">
                        <span>{{ __('filters.reset') }}</span>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FilterCategoryComponent from './Category.vue';
import { FiltersMixin } from '@js/mixins/filters';

export default {
    components: {
      FilterCategoryComponent,
    },

    mixins: [FiltersMixin],

    methods: {
        resetMaxRenders: function() {
            this.$store.dispatch( 'resetMaxRenders' );
        }
    },

    computed: {
        filters() {
            return this.getFilters;
        },
    },
}

</script>
