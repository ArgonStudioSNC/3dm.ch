export const FiltersMixin = {
    computed: {
        activeFilters(){
            var filters = Object.assign({}, this.$store.getters.getFilters);
            var queryFilters = Object.assign({}, this.$store.state.route.query);
            var activeFilters = {};

            for (var cat in queryFilters) {
                queryFilters[cat] = queryFilters[cat].split('|');

                var tagArray = [];
                queryFilters[cat].forEach((tag, i) => {
                    var filter = filters[cat] ? filters[cat].find(element => element.tag === tag) : null;
                    if (filter) tagArray.push(filter);
                });

                activeFilters[cat] = tagArray;
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
        }
    }
}
