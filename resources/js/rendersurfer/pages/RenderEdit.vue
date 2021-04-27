<style lang="scss">

#render-edit {
    button.alert:hover {
        color: $white;
        background-color: $alert-color;
    }
}
</style>

<template>
    <div id="render-edit">
        <div class="grid-container full">
            <h2>{{ __('manager.edit-render-title') }}</h2>
            <template v-if="getRenderLoadStatus == 2">
                <RenderFormComponent ref="renderForm" :render="getRender"></RenderFormComponent>
                <div class="callout alert small" v-show="!validation.is_valid">
                    <ul><li v-for="error in validation.errors"> {{ error }}</li></ul>
                </div>
                <div class="button-group">
                    <button class="primary button" v-on:click="renderUpdate()" :disabled="getRenderUpdateStatus == 1">{{ __('manager.edit-render-update') }}</button>
                    <router-link class="button" :to="{ name: 'search' }">{{ __('manager.edit-render-cancel') }}</router-link>
                    <button class="clear button alert" v-on:click="renderDelete()" :disabled="getRenderDeleteStatus == 1">{{ __('manager.edit-render-delete') }}</button>
                </div>
            </template>
            <LoaderComponent v-else></LoaderComponent>
        </div>
    </div>
</template>

<script>
import RenderFormComponent from '@js/rendersurfer/components/renders/Form';
import { RendersMixin } from '@js/rendersurfer/mixins/renders';
import LoaderComponent from '@js/rendersurfer/components/global/Loader';

export default {
    components: {
        RenderFormComponent,
        LoaderComponent
    },

    mixins: [RendersMixin],

    props: {
        render_id: {
            required: true
        },
    },

    data(){
        return {
            validation: {
                is_valid: true,
                errors: [],
            },
        }
    },

    mounted(){
        this.$store.dispatch( 'loadRender', this.render_id );
    },

    methods: {
        renderUpdate: function(){
            let form = this.$refs.renderForm.getFormFields();
            if( this.getRenderUpdateStatus != 1 && this.validate(form) ){
                this.$store.dispatch('updateRender', { 'render_id' : this.render_id, 'data' : this.toFormData(form) });
            }
        },

        renderDelete: function(){
            if( this.getRenderDeleteStatus != 1 ){
                this.$store.dispatch('deleteRender', this.render_id);
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
            formData.append('name', form.name ? form.name : '');
            formData.append('year', form.year ? form.year : '');
            formData.append('categories', JSON.stringify(form.categories));
            return formData;
        },
    },
}
</script>
