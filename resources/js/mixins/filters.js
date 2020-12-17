import _ from 'lodash';

export const FiltersMixin = {
    computed: {
        /*
        Gets the filters
        */
        filters: function(){
            if(this.$store.getters.getFiltersLoadStatus !== 2) return null;
            var filters = _.cloneDeep(this.$store.getters.getFilters);
            this.convertDBFiltersKeys(filters);
            return filters;
        },

        getFiltersLoadStatus: function() {
            return this.$store.getters.getFiltersLoadStatus;
        },

        getActiveFilters: function(){
            var filters = Object.assign({}, this.filters);
            var queryFilters = Object.assign({}, this.$store.state.route.query);
            var getActiveFilters = {};

            for (var cat in queryFilters) {
                if(filters[cat]){
                    queryFilters[cat] = queryFilters[cat].split('|');

                    var tagArray = [];
                    queryFilters[cat].forEach((tag, i) => {
                        var filter = filters[cat].find(element => element.slug === tag);
                        if (filter) tagArray.push(filter);
                    });

                    if (tagArray.length) {
                        getActiveFilters[cat] = tagArray;
                    }
                }
            }

            return getActiveFilters;
        },

        getSearchQuery: function() {
            let q = this.$store.state.route.query.q;
            return q ? _.uniq(q.toLowerCase().split('+')) : [];
        },

        filteredRenders() {
            if (this.$store.getters.getRendersLoadStatus !== 2 || this.getFiltersLoadStatus !== 2) return {};

            // copy the renders Object
            var renders = Object.assign({}, this.$store.getters.getRenders);
            if ( !_.isEmpty(this.getActiveFilters) || !_.isEmpty(this.getSearchQuery)){
                // apply the filters
                this.applyFilters(renders, this.getActiveFilters);

                // apply the search query
                this.applySearchQuery(renders, this.getSearchQuery);

                // order renders by name
                renders = Object.assign({}, _.orderBy(renders, ['query_score', 'name'],['desc', 'asc']));
            } else {
                // shuffle the renders
                renders = Object.assign({}, _.shuffle(renders));
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

        updateFiltersForCategory(filtersArray, filter) {
            if (filtersArray.length == 0) this.resetFilter(filter);
            else {
                this.$router.push({ query: Object.assign({}, this.$route.query, { [filter.category]: filtersArray.map(f => f.slug).join('|') }) });
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

        setSearchQuery(queryString) {
            var urlQuery;
            if (!queryString || queryString.length == 0) {
                urlQuery = Object.assign({}, this.$route.query);
                delete urlQuery['q'];
            }
            else urlQuery = Object.assign({}, this.$route.query, { 'q': queryString.trim().replace(/\s+/g, '+') });

            if (!_.isEqual(urlQuery, this.$route.query)) {
                this.$router.push({ query: urlQuery});
            }
            this.$store.dispatch( 'resetMaxRenders' );
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

        convertDBFiltersKeys(filters) {
            filters['countries'].map(function(obj) {
                obj['id'] = obj['abv']; // Assign new key
                return obj;
            });

            // Translate the filter options
            for (const category in filters) {
                filters[category].map(obj => {
                    obj['translated_name'] = this.__('filters.' + category + '-' + obj.slug);
                });
            }

            // Order alphabeticaly
            var nameCompare = function(a, b) {
                // Switzerland first
                if (a['abv'] == 'CH') return -1;
                if (b['abv'] == 'CH') return 1;

                let fa = a['translated_name'].toLowerCase();
                let fb = b['translated_name'].toLowerCase();
                return fa.localeCompare(fb);
            }
            filters['offices'].sort(nameCompare);
            filters['styles'].sort(nameCompare);
            filters['assignements'].sort(nameCompare);
            filters['countries'].sort(nameCompare);
        },
    }
}
