<style>

</style>

<template>
    <div class="page">
        <form>
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="large-12 medium-12 small-12 cell">
                        <label>Name
                            <span class="validation" v-show="!validations.name.is_valid">{{ validations.name.text }}</span>
                            <input type="text" placeholder="Render name" v-model="name">
                        </label>
                    </div>
                    <div class="large-12 medium-12 small-12 cell">
                        <label>Filename
                            <span class="validation" v-show="!validations.filename.is_valid">{{ validations.filename.text }}</span>
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
            filename: '',
            validations: {
                name: {
                    is_valid: true,
                    text: ''
                },
                filename: {
                    is_valid: true,
                    text: ''
                }
            }
        }
    },

    methods: {
        submitNewRender: function(){
            if( this.validateNewRender()) {
                this.$store.dispatch( 'addRender', {
                    name: this.name,
                    filename: this.filename
                });
            }
        },

        validateNewRender: function(){
            let validNewRenderForm = true;

            /*
            Ensure a name has been entered
            */
            if( this.name.trim() == '' ){
                validNewRenderForm = false;
                this.validations.name.is_valid = false;
                this.validations.name.text = 'Please enter a name for the new render!';
            }else{
                this.validations.name.is_valid = true;
                this.validations.name.text = '';
            }

            /*
            Ensure an filename has been entered
            */
            if( this.filename.trim() == '' ){
                validNewRenderForm = false;
                this.validations.filename.is_valid = false;
                this.validations.filename.text = 'Please enter an filename for the new render!';
            }else{
                this.validations.filename.is_valid = true;
                this.validations.filename.text = '';
            }

            return validNewRenderForm;
        }
    }
}
</script>
