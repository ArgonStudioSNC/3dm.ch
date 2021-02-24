export const PaginationMixin = {
    computed: {
        getMaxRenders: function() {
            return this.$store.getters.getMaxRenders;
        },
    },
    
    methods: {
        paginate(r, p = this.$store.getters.getMaxRenders) {
            const sliced = Object.keys(r).slice(0, p).reduce((result, key) => {
                                result[key] = r[key];
                                return result;
                            }, {});
            return sliced;
        },
    },
}
