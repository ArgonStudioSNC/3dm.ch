<style>

</style>

<template>
    <div id="home">
        <filterBarComponent></filterBarComponent>
        <renderGridComponent></renderGridComponent>
    </div>

</template>

<script>
import FilterBarComponent from '../components/filters/FilterBar.vue';
import RenderGridComponent from '../components/renders/GridDisplay.vue';

export default {
    components: {
      FilterBarComponent,
      RenderGridComponent,
    },
}

</script>
