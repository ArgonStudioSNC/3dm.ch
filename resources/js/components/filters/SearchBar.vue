<style lang="scss">
@import '~@/abstracts/_settings.scss';
@import '~@/mixins';

.search-bar {
    .match-result {
        span {
            font-weight: $global-weight-bold;
        }
        button {
            padding: 0 8px;
            cursor: pointer;
            color: lighten($black, 40%);
            @include transition(color 0.1s);

            &:hover {
                color: $black;
            }
        }
    }
}

</style>

<template>
    <div class="search-bar">
        <div class="match-result grid-x align-right">
            <div class="cell auto">
                <div class="input-group">
                    <input class="input-group-field" type="text" :placeholder="__('search.query-placeholder')" v-model="queryText" v-on:keyup.enter="setSearchQuery(queryText)">
                    <div class="input-group-button">
                        <button class="button" v-on:click="setSearchQuery(queryText)">
                            <i class='fas fa-search'></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cell shrink" v-if="can('add renders')">
                <button data-close v-on:click="$router.push({ name: 'manager.renders.new' })">{{ __('search.add-render-link') }}</button>
            </div>
            <div class="cell shrink">
                <span>{{ filteredRendersLength }}</span>&nbsp;{{ trans_choice("search.render-match-result", filteredRendersLength) }}
            </div>
        </div>
    </div>

</template>

<script>
import { FiltersMixin } from '@js/mixins/filters';

export default {
    mixins: [FiltersMixin],

    data () {
        return {
            queryText : "",
        }
    },
}
</script>
