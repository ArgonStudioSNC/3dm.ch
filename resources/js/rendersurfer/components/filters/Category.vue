<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style lang="scss">

.multiselect {
    color: inherit;
    font-size: 0.9rem;
    line-height: inherit;
    min-height: 0;

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
    .multiselect__input {
        border: none;
        background-color: inherit;
        color: inherit;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
        padding: 0;
        border-radius: 0;
        box-shadow: none;
        min-height: inherit;
        height: auto;
        &::placeholder {
            opacity: 1;
            color: $white;
        }
    }
    .multiselect__placeholder {
        display: none;
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
        line-height: inherit ;
        white-space: normal;
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
}

.multiselect--active {
    .multiselect__tags span {
        display: none;
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
            label="translated_name"
            :multiple="true"
            :show-labels="false"
            :close-on-select="false"
            :searchable="true"
            :option-height="20"
            :placeholder="placeholder"
            >

            <span slot="selection">
                <span>{{ placeholder }}</span>
            </span>
            <span class="multiselect__myselect" slot="caret" slot-scope="{ toggle }" @mousedown.prevent.stop="toggle"></span>
            <span slot="noResult">{{ __('filters.no-results') }}</span>
        </multiselect>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import { FiltersMixin } from '@js/rendersurfer/mixins/filters';

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

        placeholder: function() {
            let placeholder = this.__('filters.' + this.filter.category);
            if (this.activeFiltersFromCategory && this.activeFiltersFromCategory.length) {
                placeholder += ' : ' + this.trans_choice('filters.active-filters', this.activeFiltersFromCategory.length, {'nb': this.activeFiltersFromCategory.length});
            }
            return placeholder;
        },
    },
}
</script>
