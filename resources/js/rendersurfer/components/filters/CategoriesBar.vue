<style lang="scss">

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
                <filterCategoryComponent v-for="(options, category) in filtersOptions" :key="category" v-bind:filter="{category, options}"></filterCategoryComponent>
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
import { FiltersMixin } from '@js/rendersurfer/mixins/filters';
import { RendersMixin } from '@js/rendersurfer/mixins/renders';

export default {
    components: {
        FilterCategoryComponent,
    },

    mixins: [
        FiltersMixin,
        RendersMixin,
    ],

    methods: {
        resetMaxRenders: function() {
            this.$store.dispatch( 'resetMaxRenders' );
        }
    },

    computed: {
        filtersOptions() {
            var filters = this.getFilters;

            // for the time being, we just want to show countries with a registred render
            if (this.getRenders) {
                var countriesSet = new Set(this.getRenders.map(r => r.country_code));
                var countriesFilters = [];
                countriesSet.forEach((abv, i) => {
                    var filter = filters['countries'].find(element => element.abv === abv);
                    if (filter) countriesFilters.push(filter);
                });
                filters['countries'] = countriesFilters;
            }

            return filters;
        },
    },
}

</script>
