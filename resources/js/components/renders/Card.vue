<style lang="scss">
@import '~@/abstracts/_settings.scss';

.loader-bars {
    display: inline-block;
    position: relative;
    width: 60px;
    height: 60px;
    opacity: 0.6;
}
.loader-bars div {
    display: inline-block;
    position: absolute;
    left: 6px;
    width: 12px;
    background: $primary-color;
    animation: loader-bars 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.loader-bars div:nth-child(1) {
    left: 6px;
    animation-delay: -0.24s;
}
.loader-bars div:nth-child(2) {
    left: 24px;
    animation-delay: -0.12s;
}
.loader-bars div:nth-child(3) {
    left: 42px;
    animation-delay: 0;
}
@keyframes loader-bars {
    0% {
        top: 6px;
        height: 48px;
    }
    50%, 100% {
        top: 18px;
        height: 24px;
    }
}

</style>

<template>
    <div ref="brick" class="masonry-brick">
        <div class="masonry-content">
            <template v-if="base64Data">
                <img style="width:100%;" @load="resizeMasonryItem($refs.brick)" :src="base64Data" />
            </template>
            <template v-else>
                <div class="grid-x align-center-middle">
                    <div class="call loader-bars"><div></div><div></div><div></div></div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
import RenderAPI from '../../api/render.js';
import { MasonryMixin } from '../../mixins/masonry';

export default {
    props: {
        render : {
            type: Object,
            required: true,
        },
    },

    mixins: [MasonryMixin],

    data () {
        return {
            mime : null,
            base64Data : null,
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
