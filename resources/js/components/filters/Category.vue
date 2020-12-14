<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss">
    @import '~@/abstracts/_settings.scss';

    .multiselect {
        color: inherit;
        font-size: 0.9rem;
        line-height: inherit;
        min-height: 0;
    }
    .multiselect__myselect {
        position: absolute;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
    .multiselect__tags {
        font-size: 0.9rem;
        min-height: 0;
        color: white;
        background-color: $primary-color;
        border-radius: 0;
        border: none;
        padding: 0.4em 1.2em;
    }
    .multiselect__content-wrapper {
        border-radius: 0;
        border-color: $secondary-color;
    }
    .multiselect__content {
        background-color: $white;
    }
    .multiselect__option {
        min-height: 0;
        padding: 0.4em 1.2em;
        line-height: inherit ;;
        &.multiselect__option--highlight {
            background: $secondary-color;
            color: inherit;
        }
        &.multiselect__option--selected {
            background: inherit;
            color: inherit;
            font-weight: $global-weight-bold;
            &.multiselect__option--highlight {
                background: $secondary-color;
                color: inherit;
            }
        }
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
import { FiltersMixin } from '@js/mixins/filters';

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
        activeFiltersFromCategory: function(){
            return this.getActiveFilters[this.filter.category];
        },

    },
}
</script>
