<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss">
    @import '~@/abstracts/_variables.scss';
    @import '~@/abstracts/_settings.scss';

    .multiselect {
        font-size: inherit;
        line-height: inherit;
        min-height: 2.125em;
    }

    .multiselect__tags {
        min-height: 2.125em;
        color: white;
        background-color: $theme-blue;
        border-radius: 0;
        border: none;
        padding: 0.4em 0 0.4em 1.7em;
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
            @input="updateFiltersForCategory($event, filter)"
            track-by="id"
            label="name"
            :multiple="true"
            :show-labels="false"
            :close-on-select="false"
            :searchable="false"
            :option-height="20"
            placeholder=""
            >

            <span slot="selection" slot-scope="{ values }">
                <span>{{ __('filters.' + filter.category) }}</span>
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
