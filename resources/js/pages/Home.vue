<style>

</style>

<template>
    <div id="home">
        <span v-show="rendersLoadStatus == 1">Loading</span>
        <span v-show="rendersLoadStatus == 2">Renders loaded successfully!</span>
        <span v-show="rendersLoadStatus == 3">Renders loaded unsuccessfully!</span>

        <ul>
            <li v-for="render in renders">{{ render.name }}</li>
        </ul>

        <ul class="dropdown menu" data-dropdown-menu>
            <filterComponent categorie="seasontimes"></filterComponent>
            <filterComponent categorie="daytimes"></filterComponent>
        </ul>
    </div>

</template>

<script>
import FilterComponent from '../components/Filter.vue';

export default {
    components: {
      FilterComponent,
    },

    created(){
        this.$store.dispatch( 'loadRenders' );
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        /*
        Gets the renders load status
        */
        rendersLoadStatus(){
            return this.$store.getters.getRendersLoadStatus;
        },

        /*
        Gets the renders
        */
        renders(){
            return this.$store.getters.getRenders;
        }
    }
}
</script>
