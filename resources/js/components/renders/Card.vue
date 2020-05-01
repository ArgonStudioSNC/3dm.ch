<style lang="scss">
@import '~@/abstracts/_variables.scss';
@import '~@/abstracts/_settings.scss';

img {
    width: 100%;
}

</style>

<template>
    <div ref="card" class="masonry-brick">
        <div class="masonry-content">
            <img @load="onLoad" :src="base64Data || 'https://f0.pngfuel.com/png/349/251/iphone-5s-ios-progress-bar-icon-load-the-map-loading-png-clip-art.png'" />
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

    methods: {
        onLoad() {
            this.resizeMasonryItem(this.$refs.card);
        }
    },
}
</script>
