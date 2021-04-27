<style lang="scss">
@import '~@sass/_mixins';

.render-card {
    max-width: 100%;
    position: relative;
    .render-card-legend {
        color: $white;
        padding: 1em;
        z-index: 10;
        position: absolute;
        opacity: 0;
        bottom: 0px;
        @include transition(opacity 0.3s);
    }
    img {
        @include transition(filter 0.3s);
    }

    &.active {
        .render-card-legend {
            opacity: 1!important;
        }
        img {
            filter: brightness(60%);
        }
    }
}

.failed-card {
    height: 60px;
    line-height: 1.2;
    .fa-unlink {
        color: $primary-color;
        font-size: 1.5em;
        margin: 0 0.5em;
    }
    .failed-card-retry {
        color: $primary-color;
        cursor: pointer;
        &:hover {
            text-decoration: underline;
        }
    }
}

</style>

<template>
    <div ref="brick" class="masonry-brick">
        <div ref="brickContent" class="masonry-content">
            <template v-if="dl_status_code === 2">
                <div class="render-card"  @mouseover="hover = true" @mouseleave="hover = false" :class="{ active: hover }" data-open="render-modal" v-on:click="$store.dispatch( 'loadRender', render.id )">
                    <div class="render-card-legend">
                        <div style="font-weight: 400; font-size: 18px;">{{ render.name }}</div>
                        <div>
                            <span v-if="getOffice(render)">{{ getOffice(render) }}</span><span v-if="render.year">, &nbsp;{{ render.year }}</span>
                        </div>
                    </div>
                    <img style="width:100%;" :src="base64Data" />
                </div>
            </template>
            <template v-else-if="dl_status_code === 3">
                <div class="grid-x align-center-middle failed-card">
                    <div class="cell shrink"><i class="fas fa-unlink"></i></div>
                    <div class="cell shrink">
                        <div>{{ __('search.thumbnail-download-failed') }}</div>
                        <button class="failed-card-retry" v-on:click="download(1)">{{ __('search.thumbnail-download-retry') }}</button>
                    </div>
                </div>
            </template>
            <loaderComponent v-else></loaderComponent>
        </div>
    </div>
</template>

<script>
import LoaderComponent from '@js/rendersurfer/components/global/Loader';
import RenderAPI from '@js/rendersurfer/api/render.js';
import { MasonryMixin } from '@js/rendersurfer/mixins/masonry';
import { RendersMixin } from '@js/rendersurfer/mixins/renders';

export default {
    props: {
        render : {
            type: Object,
            required: true,
        },
    },

    components: {
        LoaderComponent,
    },

    mixins: [MasonryMixin, RendersMixin],

    data () {
        return {
            base64Data : null,
            hover : false,
            reader : null,
            dl_status_code : 0,
        }
    },

    mounted() {
        this.reader = new FileReader();
        this.reader.onload = r => {
            this.base64Data = this.reader.result;
        };

        this.ro = new ResizeObserver( () => this.resizeMasonryItem(this.$refs.brick) ).observe(this.$refs.brickContent);

        this.download();
    },

    destroyed () {
        delete this.ro;
    },

    methods : {
        download(tries = 2) {
            if (this.dl_status_code == 1) return;
            this.dl_status_code = 1;

            var inner = (i) => {
                if (i == 0) {
                    this.dl_status_code = 3;
                    return;
                }
                RenderAPI.picture(this.render.filename, 'small')
                .then( response => {
                    this.reader.readAsDataURL(response.data);
                    this.dl_status_code = 2;
                })
                .catch( error => {
                    if (error.response) {
                        if (error.response.status == 404) {
                            console.log("Loading render " + this.render.id + ' failed with error 404\n' + "Tries left : " + (i-1));
                            setTimeout(() => {inner(i-1)}, 3000);
                        }
                    } else {
                        console.log(error);
                        this.dl_status_code = 3;
                    }
                });
            }

            inner(tries);
        },
    },
}
</script>
