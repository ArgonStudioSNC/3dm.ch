<style>

</style>

<template>
    <div class="render-form">
        <div class="grid-x" v-if="getFiltersLoadStatus == 2">
            <div class="cell">
                <label>{{ __('manager.render-label-name') }}
                    <input type="text" :placeholder="__('manager.render-placeholder-name')" v-model="formFields.name">
                </label>
            </div>

            <div class="cell">
                <label for="render-image">{{ __('manager.render-label-file') }}</label>
                <div id="render-image">
                    <img v-if="render" v-bind:src="imagePreview" width="auto" height="150"/>
                    <vue-dropzone v-else ref="fileDropzone"
                    id="fileDropzone"
                    :options="dropzoneOptions"
                    v-on:vdropzone-file-added="vdropzoneFileAddedEvent"
                    v-on:vdropzone-max-files-exceeded="vdropzoneMaxFilesExceededEvent"></vue-dropzone>
                </div>
            </div>

            <div class="cell">
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
        </div>
        <LoaderComponent v-else></LoaderComponent>
    </div>
</template>

<script>
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
import vue2Dropzone from 'vue2-dropzone';
import RenderAPI from '@js/api/render.js';
import LoaderComponent from '@js/components/global/Loader';
import { FiltersMixin } from '@js/mixins/filters';

export default {
    components: {
        VueDropzone: vue2Dropzone,
        LoaderComponent,
    },

    mixins: [FiltersMixin],

    props: ['render'],

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
            imagePreview : null,
            dropzoneOptions : {
                url : 'https://httpbin.org/post',
                autoQueue : false,
                maxFiles : 1,
                thumbnailWidth : null,
                thumbnailHeight : 150,
            },
        }
    },

    watch: {
        render: {
            immediate: true,
            deep: true,
            handler(newRender) {
                if (newRender) {
                    // init render thumbnail
                    let reader = new FileReader();
                    reader.onload = r => {
                        this.imagePreview = reader.result;
                    };
                    RenderAPI.picture(newRender.filename, 'small')
                    .then( response => {
                        reader.readAsDataURL(response.data);
                    });

                    // init render properties
                    this.formFields.name = newRender.name;
                    this.formFields.year = newRender.year;
                    for (const id in this.formFields.categories) {
                        this.formFields.categories[id] = newRender[id];
                    }
                }
            }
        }
    },

    mounted(){
        this.$store.dispatch( 'loadFilters' );
    },

    methods: {
        vdropzoneFileAddedEvent: function(file){
            this.formFields.picture = file;
        },

        vdropzoneMaxFilesExceededEvent: function(file){
            this.$refs.fileDropzone.removeAllFiles();
            this.$refs.fileDropzone.addFile(file);
        },

        getFormFields: function() {
            return this.formFields;
        },
    },
}
</script>
