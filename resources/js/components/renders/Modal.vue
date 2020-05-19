<style scoped lang="scss">
@import '~@/abstracts/_settings.scss';
@import '~@/mixins';

.reveal {
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
            max-width: 100%;
            max-height: 100%;
        }
        &>.cell {
            margin-bottom: 2em;
        }
    }
    button {
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
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    @include translate(-50%, -50%);
}

</style>

<template>
    <div class="full reveal" :id="modalId" ref="reveal" data-reveal>
        <div class="reveal-container">
            <div class="grid-y text-center reveal-content">
                <div class="cell reveal-navigation" style="position: relative;">
                    <div class="grid-x align-center" v-show="renderIndex != null">
                        <button class="cell shrink" :class="{'disabled': !previousRender}" v-on:click="previous"><i class="fas fa-chevron-left"></i></button>
                        <div class="cell" style="width: 6em;">{{ renderIndex + 1 }}/{{ filteredRendersLength }}</div>
                        <button class="cell shrink" :class="{'disabled': !nextRender}" v-on:click="next"><i class="fas fa-chevron-right"></i></button>
                    </div>

                    <button class="close-button" data-close aria-label="Close modal" type="button">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>

                <div class="cell auto" style="position:relative;">
                    <template v-if="base64Data">
                        <img class="centered" v-on:click="next" :src="base64Data" />
                    </template>
                    <loaderComponent class="centered" color="#fefefe" v-else></loaderComponent>
                </div>

                <div class="cell">
                    <div v-show="getRenderLoadStatus == 2">
                        {{ legendText }}
                        <button data-tooltip data-click-open="false" :title="__('search.download-picture')" v-on:click="download(getRender.filename)"><i class="fas fa-file-download"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import LoaderComponent from '../global/Loader';
import { mapState } from 'vuex';
import { FiltersMixin } from '../../mixins/filters';
import { RendersMixin } from '../../mixins/renders';
import RenderAPI from '../../api/render.js';

export default {
    props: {
        modalId : String,
    },

    components: {
        LoaderComponent,
    },

    mixins: [FiltersMixin, RendersMixin],

    data () {
        return {
            base64Data : null,
            renderIndex : null,
        }
    },

    computed: mapState(['renders']),

    created() {
        var reader = new FileReader();
        reader.onload = r => {
            this.base64Data = reader.result;
        };

        this.unwatch = this.$store.watch(
            (state, getters) => getters.getRender,
            (newValue, oldValue) => {
                this.base64Data = null;

                if(newValue) {
                    this.renderIndex = Object.values(this.filteredRenders).map(function(r) {return r.id; }).indexOf(newValue.id);

                    const promise = RenderAPI.picture(newValue.filename);
                    this.lastPromise = promise;

                    promise.then( response => {
                        if(promise == this.lastPromise) {
                            reader.readAsDataURL(response.data);
                        }
                    });
                }
            },
        );
    },

    mounted() {
        $(this.$refs.reveal).on('closed.zf.reveal', x => {
            this.base64Data = null;
            this.renderIndex = null;
        });
    },

    beforeDestroy() {
        this.unwatch();
    },

    methods : {
        previous() {
            if (!this.previousRender) return;
            this.base64Data = null;
            this.$store.dispatch( 'loadRender', this.previousRender);
        },

        next() {
            if (!this.nextRender) return;
            this.base64Data = null;
            this.$store.dispatch( 'loadRender', this.nextRender);
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
    },

    computed : {

        previousRender() {
            if (this.renderIndex <= 0) return null;
            return Object.values(this.filteredRenders)[this.renderIndex - 1];
        },

        nextRender() {
            if (this.renderIndex >= this.filteredRendersLength -1) return null;
            return Object.values(this.filteredRenders)[this.renderIndex + 1];
        },

        legendText(){
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
        }
    },
}
</script>
