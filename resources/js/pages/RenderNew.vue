<style>

</style>

<template>
    <div id="render-new">
        <div class="grid-container full">
            <div>{{ __('manager.new-render-title') }}</div>
            <RenderFormComponent ref="renderForm"></RenderFormComponent>
            <div class="validation" v-show="!validation.is_valid">
                <ul>
                    <li v-for="error in validation.errors"> {{ error }}</li>
                </ul>
            </div>
            <div class="grid-x">
                <div class="cell">
                    <button class="button" v-on:click="renderStore()" :disabled="getRenderAddStatus == 1">{{ __('manager.new-render-store') }}</button>
                </div>
                <div class="cell">
                    <router-link class="button" :to="{ name: 'search' }">{{ __('manager.new-render-cancel') }}</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import RenderFormComponent from '@js/components/renders/Form';
import { RendersMixin } from '@js/mixins/renders';

export default {
    components: {
        RenderFormComponent
    },

    mixins: [RendersMixin],

    data(){
        return {
            validation: {
                is_valid: true,
                errors: [],
            },
        }
    },

    methods: {
        renderStore: function(){
            let form = this.$refs.renderForm.getFormFields();
            if( this.getRenderAddStatus != 1 && this.validate(form) ){
                this.$store.dispatch('addRender', this.toFormData(form));
            }
        },

        validate(form){
            this.validation.is_valid = true;
            this.validation.errors = [];

            /*
            Name is required and has a maximum of 64 characters
            */
            const maxNameLength = 64;
            if( !form.name || form.name.trim() == '' ){
                this.validation.is_valid = false;
                this.validation.errors.push( this.__('validations.name-required') );
            }else if( form.name.length > maxNameLength ){
                this.validation.is_valid = false;
                this.validation.errors.push( this.__('validations.name-maxlenght') );
            }
            /*
            Picture is required and has to be an Image of maximum 3Mb
            */
            const acceptedImageTypes = ['image/gif', 'image/jpeg', 'image/png', 'image/svg'];
            const maxImageSize = 3 * 1024 * 1024;
            if( !form.picture ){
                this.validation.is_valid = false;
                this.validation.errors.push( this.__('validations.picture-required') );
            }else if( !acceptedImageTypes.includes(form.picture['type']) ){
                this.validation.is_valid = false;
                this.validation.errors.push( this.__('validations.picture-type') );
            }else if( form.picture.size > maxImageSize ){
                this.validation.is_valid = false;
                this.validation.errors.push( this.__('validations.picture-maxsize') );
            }

            /*
            Year should be an integer between 1950 and today+1
            */
            const minYear = 1995;
            if( form.year && (form.year < minYear || form.year >= new Date().getFullYear()+1) ){
                this.validation.is_valid = false;
                this.validation.errors.push( this.__('validations.year-range') );
            }

            return this.validation.is_valid;
        },

        toFormData(form) {
            let formData = new FormData();
            formData.append('name', form.name);
            formData.append('picture', form.picture);
            if (form.year) formData.append('year', form.year);
            if (form.categories) formData.append('categories', JSON.stringify(form.categories));
            return formData;
        },
    },
}
</script>
