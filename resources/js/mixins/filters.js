export const FiltersMixin = {
    computed: {
        /*
        Gets the filters
        */
        filters(){
            return this.$store.getters.getFilters;
        },

        activeFilters(){
            var filters = Object.assign({}, this.$store.getters.getFilters);
            var queryFilters = Object.assign({}, this.$store.state.route.query);
            var activeFilters = {};

            for (var cat in queryFilters) {
                if(filters[cat]){
                    queryFilters[cat] = queryFilters[cat].split('|');

                    var tagArray = [];
                    queryFilters[cat].forEach((tag, i) => {
                        var filter = filters[cat].find(element => element.tag === tag);
                        if (filter) tagArray.push(filter);
                    });

                    if (tagArray.length) {
                        activeFilters[cat] = tagArray;
                    }
                }
            }

            return activeFilters;
        },
    },

    methods: {
        filterCategoryByTag(render, category, tagArray) {
            const dict = {
                offices : 'office_id',
                types : 'type_id',
                styles : 'style_id',
                seasontimes : 'seasontime_id',
                weathers : 'weather_id',
                daytimes : 'daytime_id',
                compositions : 'composition_id',
                assignements : 'assignement_id',
                countries : 'country_code',
            };

            return tagArray.some(function(tag) {
                if (category === 'countries'){
                    return render[dict[category]] === tag.code;
                }
                return render[dict[category]] === tag.id;
            });
        },

        updateFiltersForCategory(filtersArray, filter) {
            if (filtersArray.length == 0) this.resetFilter(filter);
            else {
                this.$router.push({ query: Object.assign({}, this.$route.query, { [filter.category]: filtersArray.map(f => f.tag).join('|') }) });
            }
            this.$store.dispatch( 'resetMaxRenders' );
        },

        resetFilter(filter) {
            var urlQuery = Object.assign({}, this.$route.query);
            delete urlQuery[filter.category];
            this.$router.push({ query: urlQuery});
        },

        resetAllFilters() {
            this.$router.push({ query: {} });
            this.$store.dispatch( 'resetMaxRenders' );
        },
    }
}
