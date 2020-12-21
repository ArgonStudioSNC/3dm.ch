import { RendersMixin } from '@js/mixins/renders';
import { FiltersMixin } from '@js/mixins/filters';

export const RendersFiltersMixin = {

    mixins: [
        RendersMixin,
        FiltersMixin,
    ],

    computed: {
        filteredRenders() {
            if (this.getRendersLoadStatus !== 2 || this.getFiltersLoadStatus !== 2) return {};
            // copy the renders Object
            var renders = _.cloneDeep(this.getRenders);

            if (Object.keys(this.getActiveFilters).length || this.getSearchQuery.length) {
                // apply the filters
                this.applyFilters(renders, this.getActiveFilters);
                // apply the search query
                this.applySearchQuery(renders, this.getSearchQuery);
                // Order by score then by name
                renders.sort((a,b) => {
                    if (a.query_score < b.query_score) return -1;
                    if (a.query_score > b.query_score) return 1;
                    return a.name.localeCompare(b.name);
                });
            }
            return renders;
        },

        filteredRendersLength() {
            return Object.keys(this.filteredRenders).length;
        },
    },

    methods: {
        filterCategoryByTag(render, category, tagArray) {
            const dict = {
                offices : 'office_id',
                types : 'type_id',
                styles : 'style_id',
                seasontimes : 'seasontime_id',
                weather : 'weather_id',
                daytimes : 'daytime_id',
                lights : 'light_id',
                compositions : 'composition_id',
                assignements : 'assignement_id',
                countries : 'country_code',
            };

            return tagArray.some(function(tag) {
                return render[dict[category]] === tag.id;
            });
        },

        applyFilters(renders, filters) {
            for (var cat in filters){
                for (var key in renders) {
                    if (!this.filterCategoryByTag(renders[key], cat, filters[cat])) {
                        delete renders[key];
                    }
                }
            }
        },

        applySearchQuery(renders, queryArray) {
            if (queryArray.length > 0) {
                for (var key in renders) {
                    var score = 0;
                    queryArray.forEach(tag => {
                        if ( renders[key].name.toLowerCase().includes(tag) ) {
                            score++;
                        }
                    });
                    score ? renders[key].query_score = score : delete renders[key];
                }
            }
        },
    },
}
