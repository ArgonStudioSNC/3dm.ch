<style lang="scss">
@import '~@/abstracts/_settings.scss';

#app-layout {
    margin-top: 1.5em;
}

.logo {
    padding-bottom: 1.5em;
    display: block;
    max-width: 200px;
    height: auto;

    @include breakpoint(xxlarge) {
        position: absolute;
    }
}

</style>

<template>
    <div id="app-layout">
        <a class="logo" href="/"><img :src="image_src"></a>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
import FooterComponent from '../components/global/Footer.vue';
import AuthAPI from '../api/auth.js';

export default {
    components: {
      FooterComponent,
    },

    data () {
        return {
            image_src: '/media/branding/3dm-logo-normal.svg',
        }
    },

    created () {
        this.$store.dispatch( 'loadPermissions' );
        this.$store.dispatch( 'loadRoles' );
    }
}
</script>
