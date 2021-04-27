<style scoped lang="scss">
@import '~@sass/_mixins';

.reveal {
    padding: 1rem 0;
    @include breakpoint(medium) {
        padding: $global-padding;
    }

    .overlay {
        z-index: 5;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow-y: auto;
    }

    .reveal-container {
        margin-left: auto;
        margin-right: auto;
        height: 100%;
    }
    .reveal-content {
        height: 100%;
        width: 100%;
        color: $white;
        img {
            z-index: 10;
            max-width: 100%;
            max-height: 100%;
        }
        &>.cell {
            position: relative;
            margin-bottom: 1em;
            @include breakpoint(medium) {
                margin-bottom: 2em;
            }
        }
    }
    button {
        z-index: 10;
        padding: 0 8px;
        cursor: pointer;
        color: darken($white, 40%);
        @include transition(color 0.1s);

        &:hover {
            color: $white;
        }
        &.disabled {
            cursor: default;
            color: darken($white, 40%) !important;
        }
    }
    .cell {
        min-height: 24px;;
    }
    .z-rel-10 {
        position: relative;
        z-index: 10;
    }
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    @include translate(-50%, -50%);
}

</style>

<template>
    <div class="render-modal">
        <div id="render-modal" class="full reveal" data-reveal>
            <div class="overlay" data-close></div>
            <div class="reveal-container">
                <div class="grid-y text-center reveal-content">
                    <div class="cell reveal-navigation">
                        <div class="grid-x align-center">
                            <button class="cell shrink z-rel-10" :class="{'disabled': !previousRender}" v-on:click="previous"><i class="fas fa-chevron-left"></i></button>
                            <div class="cell z-rel-10" style="width: 6em;"><span v-show="renderIndex >= 0">{{ renderIndex + 1 }}/{{ filteredRendersLength }}</span></div>
                            <button class="cell shrink z-rel-10" :class="{'disabled': !nextRender}" v-on:click="next"><i class="fas fa-chevron-right"></i></button>
                        </div>

                        <button class="close-button z-10" data-close aria-label="Close modal" type="button">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                    </div>

                    <div class="cell auto">
                        <template v-if="renderImage">
                            <img class="centered z-10" v-on:click="next" :src="renderImage" />
                        </template>
                        <loaderComponent class="centered z-10" color="#fefefe" v-else></loaderComponent>
                    </div>

                    <div class="cell" v-show="getRenderLoadStatus == 2">
                        <div v-show="getRenderLoadStatus == 2">
                            <span class="z-rel-10">{{ legendText }}</span>
                            <button class="z-rel-10 has-tip" data-tooltip data-click-open="false" :title="__('search.download-picture')" v-on:click="download(getRender.filename)"><i class="fas fa-file-download"></i></button>
                            <button class="z-rel-10" data-close v-on:click="edit(getRender)" v-if="can('edit renders')">{{ __('search.edit-render-link') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import LoaderComponent from '@js/rendersurfer/components/global/Loader';
import { mapState } from 'vuex';
import { RendersFiltersMixin } from '@js/rendersurfer/mixins/rendersFilters';
import RenderAPI from '@js/rendersurfer/api/render.js';

export default {
    components: {
        LoaderComponent,
    },

    mixins: [
        RendersFiltersMixin,
    ],

    data () {
        return {
            base64Data : null,
            searchQuery : null,
            modalOpen : false,
        }
    },

    computed: mapState(['renders']),

    mounted() {
        this.reveal = new Foundation.Reveal($('#render-modal'));
        this.tooltip = $('.has-tip').foundation();

        this.reader = new FileReader();
        this.reader.onload = r => {
            this.base64Data = this.reader.result;
        };

        $('#render-modal').on('open.zf.reveal', x => {
            this.searchQuery = this.$route.name == 'search' ? this.$route.query : null;
            this.modalOpen = true;
        });

        $('#render-modal').on('closed.zf.reveal', x => {
            if (this.searchQuery) {
                var queryString = Object.keys(this.searchQuery).map(key => key + '=' + this.searchQuery[key]).join('&');
                history.replaceState(this.state, '', '/search' + (queryString?'?':'') + queryString);
                this.searchQuery = null;
            }
            this.modalOpen = false;
        });
    },

    beforeDestroy() {
        this.searchQuery = null;
        this.reveal.close();
        $('#render-modal').remove();
    },

    methods : {
        openReveal() {
            this.reveal.open();
        },

        previous() {
            var r = this.previousRender;
            if (r) {
                this.$store.dispatch( 'loadRender', r.id);
            }
        },

        next() {
            var r = this.nextRender;
            if (r) {
                this.$store.dispatch( 'loadRender', r.id);
            }
        },

        async download(filename) {
            if (this.getRenderLoadStatus != 2) return;
            console.log('downloading');

            RenderAPI.picture(filename, 'original').then( response => {
                const url = URL.createObjectURL(response.data);
                const a = document.createElement('a');
                a.href = url;
                a.download = filename || 'download';

                const clickHandler = () => {
                    setTimeout(() => {
                        URL.revokeObjectURL(url);
                        removeEventListener('click', clickHandler);
                    }, 150);
                };
                a.addEventListener('click', clickHandler, false);
                a.click();
                return a;
            });
        },

        edit(render){
            this.$router.push({ name: 'manager.renders.edit', params: { render_id: render.id }});
        },
    },

    computed : {
        renderImage() {
            if (!this.modalOpen || this.$store.getters.getRenderLoadStatus != 2) {
                this.base64Data = null;
            } else if (!this.base64Data) {
                let render = this.$store.getters.getRender;
                history.replaceState(this.state, render.name, '/renders/' + render.id);

                const promise = RenderAPI.picture(render.filename);
                this.lastPromise = promise;

                promise.then( response => {
                    if(promise == this.lastPromise) {
                        this.reader.readAsDataURL(response.data);
                    }
                }).catch( error => {
                    console.error('Image ' + render.filename + ' from render ' + render.id + ' not found !');
                });
            }
            return this.base64Data;
        },

        previousRender() {
            if (this.renderIndex <= 0) return null;
            return Object.values(this.filteredRenders)[this.renderIndex - 1];
        },

        nextRender() {
            if (this.renderIndex < 0 || this.renderIndex >= this.filteredRendersLength -1) return null;
            return Object.values(this.filteredRenders)[this.renderIndex + 1];
        },

        legendText() {
            if (this.getRenderLoadStatus != 2) return null;
            var name = this.getRender.name, office = this.getOffice(this.getRender), year = this.getRender.year;
            var s = name;
            if (office) {
                s += "\u00A0/\u00A0" + office;
                if (year) return s + ",\u00A0" + year;
                return s;
            }
            if (year) return s += "\u00A0/\u00A0" + year;
            return s;
        },

        renderIndex() {
            if (!this.getRender || this.filteredRendersLength == 0) return -1;
            return Object.values(this.filteredRenders).map(function(r) {return r.id; }).indexOf(this.getRender.id);
        },
    },
}
</script>
