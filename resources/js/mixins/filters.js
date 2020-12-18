import _ from 'lodash';

export const FiltersMixin = {
    computed: {
        getFiltersLoadStatus: function() {
            return this.$store.getters.getFiltersLoadStatus;
        },

        /*
        Gets the filters
        */
        getFilters: function(){
            if(this.$store.getters.getFiltersLoadStatus !== 2) return null;
            var filters = _.cloneDeep(this.$store.getters.getFilters);
            this.convertDBFiltersKeys(filters);
            return filters;
        },

        getActiveFilters: function(){
            var filters = Object.assign({}, this.getFilters);
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
    },

    methods: {
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
                if (a.abv == 'CH') return -1;
                if (b.abv == 'CH') return 1;

                return a.translated_name.localeCompare(b.translated_name);
            }
            filters['offices'].sort(nameCompare);
            filters['styles'].sort(nameCompare);
            filters['assignements'].sort(nameCompare);
            filters['countries'].sort(nameCompare);
        },
    }
}
