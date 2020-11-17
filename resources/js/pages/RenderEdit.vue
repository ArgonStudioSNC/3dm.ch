<style>

</style>

<template>
    <div id="render-edit">
        <template v-if="displayForm">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <span class="validation" v-show="!validations.name.is_valid">{{ validations.name.text }}</span>
                        <label>{{ __('manager.render-label-name') }}
                            <input type="text" :placeholder="__('manager.render-placeholder-name')" v-model="formFields.name">
                        </label>
                    </div>

                    <div class="cell">
                        <span class="validation" v-show="!validations.picture.is_valid">{{ validations.picture.text }}</span>
                        <label for="render-file-upload" class="button">{{ __('manager.render-label-file') }}</label>
                        <input type="file" id="render-file-upload" class="show-for-sr" @change="onFileChange">
                    </div>
                    <div class="cell" v-show="showPreview">
                        <img v-bind:src="imagePreview" width="250" height="250"/>
                    </div>

                    <div class="cell">
                        <span class="validation" v-show="!validations.year.is_valid">{{ validations.year.text }}</span>
                        <label>{{ __('manager.render-label-year') }}
                            <input type="number" :placeholder="__('manager.render-placeholder-year')" v-model="formFields.year">
                        </label>
                    </div>

                    <div class="cell">
                        <label>{{ __('filters.offices') }}
                            <select v-model="formFields.categories['office_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.offices" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.types') }}
                            <select v-model="formFields.categories['type_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.types" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.styles') }}
                            <select v-model="formFields.categories['style_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.styles" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.seasontimes') }}
                            <select v-model="formFields.categories['seasontime_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.seasontimes" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.weather') }}
                            <select v-model="formFields.categories['weather_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.weather" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.daytimes') }}
                            <select v-model="formFields.categories['daytime_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.daytimes" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.lights') }}
                            <select v-model="formFields.categories['light_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.lights" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.compositions') }}
                            <select v-model="formFields.categories['composition_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.compositions" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.assignements') }}
                            <select v-model="formFields.categories['assignement_id']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.assignements" :key="option.id" :value="option.id">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="cell">
                        <label>{{ __('filters.countries') }}
                            <select v-model="formFields.categories['country_code']">
                                <option :value=null>{{ __('manager.render-no-option') }}</option>
                                <option v-for="option in filters.countries" :key="option.code" :value="option.code">{{ option.name }}</option>
                            </select>
                        </label>
                    </div>

                    <div class="cell" v-if="!editMode">
                        <button class="button" v-on:click="renderStore()" :disabled="renderAddStatus == 1">{{ __('manager.new-render-store') }}</button>
                    </div>
                    <div class="cell" v-if="!editMode">
                        <router-link class="button" :to="{ name: 'search' }">{{ __('manager.new-render-cancel') }}</router-link>
                    </div>

                    <div class="cell" v-if="editMode">
                        <button class="button" v-on:click="renderUpdate()" :disabled="renderUpdateStatus == 1">{{ __('manager.edit-render-update') }}</button>
                    </div>
                    <div class="cell" v-if="editMode">
                        <button class="button" v-on:click="renderDelete()" :disabled="renderDeleteStatus == 1">{{ __('manager.edit-render-delete') }}</button>
                    </div>
                    <div class="cell" v-if="editMode">
                        <router-link class="button" :to="{ name: 'search' }">{{ __('manager.edit-render-cancel') }}</router-link>
                    </div>
                </div>
            </div>
        </template>
        <LoaderComponent v-else></LoaderComponent>
    </div>
</template>

<script>
import LoaderComponent from '../components/global/Loader';
import RenderAPI from '../api/render.js';
import { FiltersMixin } from '../mixins/filters';
import { RendersMixin } from '../mixins/renders';

export default {
    components: {
        LoaderComponent,
    },

    mixins: [FiltersMixin, RendersMixin],

    props: ['render_id'],

    data(){
        return {
            formFields: {
                name: null,
                year: null,
                picture: null,
                categories: {
                    office_id : null,
                    type_id : null,
                    style_id : null,
                    seasontime_id : null,
                    weather_id : null,
                    daytime_id : null,
                    light_id : null,
                    composition_id : null,
                    assignement_id : null,
                    country_code : null,
                },
            },
            imagePreview: null,
            showPreview: false,
            validations: {
                name: {
                    is_valid: true,
                    text: ''
                },
                year: {
                    is_valid: true,
                    text: ''
                },
                picture: {
                    is_valid: true,
                    text: ''
                }
            },
        }
    },

    created(){
        this.$store.dispatch( 'loadFilters' );

        if (this.render_id) {
            this.$store.dispatch( 'loadRender', this.render_id );
        }
    },

    /*
    Defines the computed properties on the component.
    */
    computed: {
        renderAddStatus() {
            return this.$store.getters.getRenderAddStatus;
        },
        renderUpdateStatus() {
            return this.$store.getters.getRenderUpdateStatus;
        },
        renderDeleteStatus() {
            return this.$store.getters.getRenderDeleteStatus;
        },

        editMode: function() {
            return this.render_id != null && this.render_id != undefined;
        },

        displayForm: function() {
            if(this.getFiltersLoadStatus == 2 && (!this.editMode || this.getRenderLoadStatus == 2) ){
                if (this.editMode) {
                    let render = this.getRender;
                    this.formFields.name = render.name;
                    this.formFields.year = render.year;

                    let reader  = new FileReader();
                    reader.onload = r => {
                        this.showPreview = true;
                        this.imagePreview = reader.result;
                    };
                    RenderAPI.picture(render.filename, 'small')
                    .then( response => {
                        reader.readAsDataURL(response.data);
                    });

                    for (var key in this.formFields.categories ){
                        this.formFields.categories[key] = render[key];
                    }
                }
                return true;
            }
            return false;
        },
    },

    methods: {
        onFileChange: function(event){
            this.formFields.picture = event.target.files[0];
            let reader  = new FileReader();

            reader.onload = r => {
                this.showPreview = true;
                this.imagePreview = reader.result;
            };

            if( this.formFields.picture ){
                if ( /\.(jpe?g|png|gif)$/i.test( this.formFields.picture.name ) ) {
                    reader.readAsDataURL( this.formFields.picture );
                }
            }
        },

        renderStore: function(){
            if( this.getRenderAddStatus != 1 && this.validateForm() ){
                this.$store.dispatch('addRender', this.formData());
            }
        },

        renderUpdate: function(){
            if( this.getRenderUpdateStatus != 1 && this.render_id && this.validateForm() ){
                this.$store.dispatch('updateRender', { 'render_id' : this.render_id, 'data' : this.formData() });
            }
        },

        renderDelete: function(){
            if( this.getRenderDeleteStatus != 1 && this.render_id ){
                this.$store.dispatch('deleteRender', this.render_id);
            }
        },

        validateForm: function(){
            let validNewRenderForm = true;

            /*
            Name is required and has a maximum of 64 characters
            */
            const maxNameLength = 64;
            if( !this.formFields.name || this.formFields.name.trim() == '' ){
                validNewRenderForm = false;
                this.validations.name.is_valid = false;
                this.validations.name.text = this.__('validations.name-required');
            }else if( this.formFields.name.length > maxNameLength ){
                validNewRenderForm = false;
                this.validations.name.is_valid = false;
                this.validations.name.text = this.__('validations.name-maxlenght');
            }else{
                this.validations.name.is_valid = true;
                this.validations.name.text = '';
            }

            /*
            Year should be an integer between 1950 and today+1
            */
            const minYear = 1995;
            if( this.formFields.year && (this.formFields.year < minYear || this.formFields.year >= new Date().getFullYear()+1) ){
                validNewRenderForm = false;
                this.validations.year.is_valid = false;
                this.validations.year.text = this.__('validations.year-range');
            }else{
                this.validations.year.is_valid = true;
                this.validations.year.text = '';
            }

            /*
            Picture is required and has to be an Image of maximum 3Mb
            */
            const acceptedImageTypes = ['image/gif', 'image/jpeg', 'image/png', 'image/svg'];
            const maxImageSize = 3 * 1024 * 1024;
            if( !this.formFields.picture ){
                if ( this.editMode ){
                    this.validations.picture.is_valid = true;
                    this.validations.picture.text = '';
                }else{
                    validNewRenderForm = false;
                    this.validations.picture.is_valid = false;
                    this.validations.picture.text = this.__('validations.picture-required');
                }
            }else if( !acceptedImageTypes.includes(this.formFields.picture['type']) ){
                validNewRenderForm = false;
                this.validations.picture.is_valid = false;
                this.validations.picture.text = this.__('validations.picture-type');
            }else if( this.formFields.picture.size > maxImageSize ){
                validNewRenderForm = false;
                this.validations.picture.is_valid = false;
                this.validations.picture.text = this.__('validations.picture-maxsize');
            }else{
                this.validations.picture.is_valid = true;
                this.validations.picture.text = '';
            }

            return validNewRenderForm;
        },

        formData: function() {
            let formData = new FormData();
            if (this.formFields.name) formData.append('name', this.formFields.name);
            if (this.formFields.year) formData.append('year', this.formFields.year);
            if (this.formFields.picture) formData.append('picture', this.formFields.picture);
            if (this.formFields.categories) formData.append('categories', JSON.stringify(this.formFields.categories));
            return formData;
        },
    },
}
</script>
