<style lang="scss">
@import '~@/abstracts/_variables.scss';
@import '~@/abstracts/_settings.scss';

#app-layout {
    padding-top: 1.5em;
}

.logo {
    position: absolute;
    max-width: 200px;
    height: auto;
}

</style>

<template>
    <div id="app-layout">
        <a href="/rendersurfer">
            <img class="logo" :src="image_src">
        </a>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    data () {
        return {
            image_src: '/media/branding/3dm-logo-normal.svg',
            base64Data : null,
        }
    },
}
</script>
