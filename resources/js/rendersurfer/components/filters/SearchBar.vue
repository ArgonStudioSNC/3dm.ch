<style lang="scss">
@import '~@/rendersurfer/_settings.scss';
@import '~@/mixins';

.search-bar {
    .match-result {
        span {
            font-weight: $global-weight-bold;
        }
    }
    .search-field {
        .input-group {
            margin: 0;
            .input-group-field[type='text'] {
                font-size: inherit;
                border: none;
                border-bottom: 1px solid $light-gray;
                box-shadow: none;
                padding: 0.1em;
                height: auto;
                color: $medium-gray;
                @include transition(color 0.1s);
                &:focus {
                    color: $black;
                }
            }
            .input-group-button {
                border-bottom: 1px solid $light-gray;
                button {
                    padding: 0 0.1em;
                    font-size: inherit;
                    color: $medium-gray;
                    background-color: $white;
                    @include transition(color 0.1s);
                    &:hover {
                        color: $primary-color;
                    }
                }
            }
        }
    }
    button.new-render {
        padding: 0 8px;
        cursor: pointer;
        color: $medium-gray;
        @include transition(color 0.1s);

        &:hover {
            color: $primary-color;
        }
    }
}

</style>

<template>
    <div class="search-bar">
        <div class="grid-x align-right align-bottom">
            <div class="cell large-auto xlarge-3 search-field">
                <div class="input-group">
                    <input class="input-group-field" type="text" :placeholder="__('search.query-placeholder')" v-model="queryText" v-on:keyup.enter="setSearchQuery(queryText)">
                    <div class="input-group-button">
                        <button class="button" v-on:click="setSearchQuery(queryText)">
                            <i class='fas fa-search'></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="cell shrink xlarge-auto"></div>
            <div class="cell large-shrink" v-if="can('add renders')">
                <button class="new-render" data-close v-on:click="$router.push({ name: 'manager.renders.new' })">{{ __('search.add-render-link') }}</button>
            </div>
            <div class="cell large-shrink match-result">
                <span>{{ filteredRendersLength }}</span>&nbsp;{{ trans_choice("search.render-match-result", filteredRendersLength) }}
            </div>
        </div>
    </div>

</template>

<script>
import { RendersFiltersMixin } from '@js/rendersurfer/mixins/rendersFilters';

export default {
    mixins: [
        RendersFiltersMixin,
    ],

    data () {
        return {
            queryText : "",
        }
    },
}
</script>
