<style lang="scss">
@import '~@/rendersurfer/_settings.scss';

#default-layout {
    margin-top: 1.5em;
    .layout-header {
        margin-bottom: 4em;
    }
}

.logo {
    padding-bottom: 1.5em;
    display: block;
    max-width: 200px;
    height: auto;
}

</style>

<template>
    <div id="default-layout">
        <div class="layout-header grid-container full">
            <a class="logo" href="/">
                <img :src="image_src">
            </a>
        </div>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
import FooterComponent from '@js/rendersurfer/components/global/Footer.vue';
import AuthAPI from '@js/rendersurfer/api/auth.js';

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
