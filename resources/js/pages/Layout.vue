<style>

</style>

<template>
  <div id="app-layout">

    <router-view></router-view>
  </div>
</template>

<script>

  export default {
    components: {
    },

    created(){
      this.$store.dispatch( 'loadRenders' );
    }
  }
</script>
