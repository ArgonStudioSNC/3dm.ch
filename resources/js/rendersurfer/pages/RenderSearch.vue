<style lang="scss">

#home {
    min-height: 100vh;
}

</style>

<template>

    <div id="home" ref='home'>
        <renderGridComponent></renderGridComponent>
        <renderModalComponent ref='modal' ></renderModalComponent>
    </div>

</template>

<script>
import RenderGridComponent from '@js/rendersurfer/components/renders/GridDisplay.vue';
import RenderModalComponent from '@js/rendersurfer/components/renders/Modal.vue';

export default {
    components: {
      RenderGridComponent,
      RenderModalComponent,
    },

    props: ['render_id'],

    mounted() {
        if (this.$route.name == 'renders.show') {
            this.$router.replace({name: 'search'});
            this.$store.dispatch( 'loadRender', this.render_id );

            window.addEventListener('DOMContentLoaded', (event) => {
                setTimeout(() => {
                    this.$refs.modal.openReveal();
                }, 200);
            });
        }
    },
}

</script>
