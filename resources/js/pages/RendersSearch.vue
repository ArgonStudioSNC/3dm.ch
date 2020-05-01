<style lang="scss">
@import '~@/abstracts/_variables.scss';
@import '~@/abstracts/_settings.scss';

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
