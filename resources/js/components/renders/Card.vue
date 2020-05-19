<style lang="scss">
@import '~@/abstracts/_settings.scss';
@import '~@/mixins';

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

</style>

<template>
    <div ref="brick" class="masonry-brick">
        <div class="masonry-content">
            <template v-if="base64Data">
                <div class="render-card"  @mouseover="hover = true" @mouseleave="hover = false" :class="{ active: hover }" data-open="render-modal" v-on:click="$store.dispatch( 'loadRender', render )">
                    <div class="render-card-legend">
                        <div style="font-weight: 400; font-size: 18px;">{{ render.name }}</div>
                        <div>
                            <span v-if="getOffice(render)">{{ getOffice(render) }}</span><span v-if="render.year">, &nbsp;{{ render.year }}</span>
                        </div>
                    </div>
                    <img style="width:100%;" @load="resizeMasonryItem($refs.brick)" :src="base64Data" />
                </div>
            </template>
            <loaderComponent v-else></loaderComponent>
        </div>
    </div>
</template>

<script>
import LoaderComponent from '../global/Loader';
import RenderAPI from '../../api/render.js';
import { MasonryMixin } from '../../mixins/masonry';
import { RendersMixin } from '../../mixins/renders';

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
        }
    },

    created() {
        var reader = new FileReader();
        reader.onload = r => {
            this.base64Data = reader.result;
        };

        RenderAPI.picture(this.render.filename, 'small')
        .then( response => {
            reader.readAsDataURL(response.data);
        });
    },

    mounted() {
        this.resizeMasonryItem(this.$refs.brick)
    },
}
</script>
