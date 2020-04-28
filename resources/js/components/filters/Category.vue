<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss">
    @import '~@/abstracts/_variables.scss';
    @import '~@/abstracts/_settings.scss';

    .multiselect {
        font-size: 17px;
    }

    .multiselect__tags {
        color: white;
        background-color: $theme-blue;
        border-radius: 0;
        border: none;
        font-size: 17px;
    }

    .multiselect__content-wrapper {
        border-radius: 0;
        border: none;
    }

    .multiselect__content {
        background-color: $light-brown;
    }

    .multiselect__myselect {
        position: absolute;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
</style>

<template>
    <div class="cell">
        <multiselect
            :options="filter.options"
            :value="activeFiltersFromCategory"
            @input="updateFilters"
            track-by="id"
            label="name"
            :multiple="true"
            :show-labels="false"
            :close-on-select="false"
            :searchable="false"
            placeholder=""
            >

            <span slot="selection" slot-scope="{ values }">
                <span>{{ __('filter-categories.' + filter.category) }}</span>
                <span v-if="values.length">: {{ values.length }} filtres actifs</span>
            </span>
            <span class="multiselect__myselect" slot="caret" slot-scope="{ toggle }" @mousedown.prevent.stop="toggle"></span>
        </multiselect>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import { FiltersMixin } from '../../mixins/filters';

export default {
    components: { Multiselect },

    props: {
        filter: {
            type: Object,
            required: true,
        },
    },

    mixins: [FiltersMixin],

    methods: {
        updateFilters(filtersArray) {
            if (filtersArray.length == 0) this.resetFilters();
            else {
                this.$router.push({ query: Object.assign({}, this.$route.query, { [this.filter.category]: filtersArray.map(filter => filter.tag).join('|') }) });
            }
            this.$store.dispatch( 'resetMaxRenders' );
        },

        resetFilters(){
            var urlQuery = Object.assign({}, this.$route.query);
            delete urlQuery[this.filter.category];
            this.$router.push({ query: urlQuery});
        },
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        activeFiltersFromCategory(){
            return this.activeFilters[this.filter.category];
        },

    },
}
</script>
