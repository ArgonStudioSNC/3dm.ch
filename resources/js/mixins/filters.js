export const FiltersMixin = {
    computed: {
        /*
        Gets the filters
        */
        filters: function(){
            if(this.$store.getters.getFiltersLoadStatus !== 2) return null;
            return this.$store.getters.getFilters;
        },

        getFiltersLoadStatus: function() {
            return this.$store.getters.getFiltersLoadStatus;
        },

        activeFilters: function(){
            var filters = Object.assign({}, this.filters);
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

        filteredRenders: function(){
            if(this.$store.getters.getRendersLoadStatus != 2) return {};

            var resultRenders = Object.assign({}, this.$store.getters.getRenders);

            for (var cat in this.activeFilters){
                for (var renderKey in resultRenders) {
                    if (!this.filterCategoryByTag(resultRenders[renderKey], cat, this.activeFilters[cat])) {
                        delete resultRenders[renderKey];
                    }
                }
            }
            // order filters by name
            resultRenders = _.orderBy(resultRenders, ['name'],['asc']);

            return resultRenders;
        },

        filteredRendersLength: function() {
            return Object.keys(this.filteredRenders).length;
        },
    },

    methods: {
        filterCategoryByTag: function(render, category, tagArray) {
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
                if (category === 'countries'){
                    return render[dict[category]] === tag.code;
                }
                return render[dict[category]] === tag.id;
            });
        },

        updateFiltersForCategory: function(filtersArray, filter) {
            if (filtersArray.length == 0) this.resetFilter(filter);
            else {
                this.$router.push({ query: Object.assign({}, this.$route.query, { [filter.category]: filtersArray.map(f => f.tag).join('|') }) });
            }
            this.$store.dispatch( 'resetMaxRenders' );
        },

        resetFilter: function(filter) {
            var urlQuery = Object.assign({}, this.$route.query);
            delete urlQuery[filter.category];
            this.$router.push({ query: urlQuery});
        },

        resetAllFilters: function() {
            this.$router.push({ query: {} });
            this.$store.dispatch( 'resetMaxRenders' );
        },
    }
}
