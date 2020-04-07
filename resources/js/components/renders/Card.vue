<style lang="scss">
@import '~@/abstracts/_variables.scss';

</style>

<template>
    <div>
        {{ render.name }}
        <img style="width:50px;" :src="base64Data || 'https://f0.pngfuel.com/png/349/251/iphone-5s-ios-progress-bar-icon-load-the-map-loading-png-clip-art.png'" />
    </div>
</template>

<script>
import RenderAPI from '../../api/render.js';

export default {
    props: {
        render : {
            type: Object,
            required: true,
        },
    },

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

        RenderAPI.picture('1541178083000.jpg')
        .then( response => {
            reader.readAsDataURL(response.data);
        });
    },
}
</script>
