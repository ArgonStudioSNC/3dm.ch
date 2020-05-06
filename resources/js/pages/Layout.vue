<style lang="scss">
@import '~@/abstracts/_settings.scss';

#app-layout {
    margin-top: 1.5em;
    min-height: 100vh;
}

.logo {
    padding-bottom: 1.5em;
    position: block;
    max-width: 200px;
    height: auto;

    @include breakpoint(xxlarge) {
        position: absolute;
    }
}

</style>

<template>
    <div id="app-layout">
        <a href="/rendersurfer">
            <img class="logo" :src="image_src">
        </a>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
import FooterComponent from '../components/global/Footer.vue';

export default {
    components: {
      FooterComponent,
    },

    data () {
        return {
            image_src: '/media/branding/3dm-logo-normal.svg',
            base64Data : null,
        }
    },
}
</script>
