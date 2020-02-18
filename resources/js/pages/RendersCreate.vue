<style>

</style>

<template>
    <div class="page">
        <form>
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="large-12 medium-12 small-12 cell">
                        <label>Name
                            <input type="text" placeholder="Render name" v-model="name">
                        </label>
                    </div>
                    <div class="large-12 medium-12 small-12 cell">
                        <label>Filename
                            <input type="text" placeholder="Filename" v-model="filename">
                        </label>
                    </div>
                    <div class="large-12 medium-12 small-12 cell">
                        <a class="button" v-on:click="submitNewRender()">Add Render</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return {
            name: '',
            filename: ''
        }
    },

    methods: {
        submitNewRender(){
            this.$store.dispatch( 'addRender', {
                name: this.name,
                filename: this.filename
            });
        }
    }
}
</script>
