<style lang="scss">
@import '~@/rendersurfer/_settings.scss';
@import '~@/mixins';

.render-form {
    .custom-dropzone {
        min-height: 232px;
        border: 1px solid $medium-gray;
        font-family: $body-font-family;
        letter-spacing: normal;
        color: $dark-gray;
        transition: .3s linear;
        padding: .5rem;

        &:hover {
            background-color: $light-brown;
        }

        .dz-preview {
            margin: .5rem;
            .dz-details {
                background-color: $primary-color;
                padding: 1em;
                font-size:  inherit;
                .dz-size  {
                    margin: 0;
                    font-size:  inherit;
                }
            }
            .dz-image img {
                @include transition(filter 0.3s);
            }
            &:hover .dz-image img{
                transform: none;
                filter: brightness(60%);
            }

            .dz-error-mark, .dz-success-mark, .dz-progress {
                display: none;
            }
        }
        .dz-preview.dz-image-preview .dz-details {
            @include transition(opacity 0.3s);
            background-color: transparent;
        }
        .dz-message  {
            margin : 4rem 0;
            padding: .5rem;
        }
    }

    .render-image-box {
        min-height: 232px;
        border: 1px solid $medium-gray;
        padding: .5rem;
        img {
            margin: .5rem;
            height: 200px;
            width: auto;
        }
    }
}

</style>

<template>
    <div class="render-form">
        <template v-if="getFiltersLoadStatus == 2">
            <div class="grid-y grid-margin-y">
                <div class="cell">
                    <div class="grid-x grid-margin-x grid-margin-y">
                        <div class="cell large-4">
                            <div class="grid-y grid-margin-y">
                                <div class="cell">
                                    <label>{{ __('manager.render-label-name') }}
                                        <input type="text" :placeholder="__('manager.render-placeholder-name')" v-model="formFields.name">
                                    </label>
                                </div>
                                <div class="cell">
                                    <label>{{ __('manager.render-label-year') }}
                                        <input type="number" :placeholder="__('manager.render-placeholder-year')" v-model="formFields.year">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="cell large-8">
                            <div class="grid-y grid-margin-y">
                                <div class="cell">
                                    <label for="render-image">{{ __('manager.render-label-file') }}</label>
                                    <div id="render-image" class="render-image-box" v-if="render">
                                        <img v-bind:src="imagePreview"/>
                                    </div>
                                    <div id="render-image" v-else>
                                        <vue-dropzone ref="fileDropzone" class="custom-dropzone"
                                        id="dropzone"
                                        :options="dropzoneOptions"
                                        v-on:vdropzone-file-added="vdropzoneFileAddedEvent"
                                        v-on:vdropzone-max-files-exceeded="vdropzoneMaxFilesExceededEvent"></vue-dropzone>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell">
                    <div class="grid-x grid-margin-x grid-margin-y">
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.offices') }}
                                <select v-model="formFields.categories['office_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.offices" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.types') }}
                                <select v-model="formFields.categories['type_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.types" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.styles') }}
                                <select v-model="formFields.categories['style_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.styles" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.seasontimes') }}
                                <select v-model="formFields.categories['seasontime_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.seasontimes" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.weather') }}
                                <select v-model="formFields.categories['weather_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.weather" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.daytimes') }}
                                <select v-model="formFields.categories['daytime_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.daytimes" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.lights') }}
                                <select v-model="formFields.categories['light_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.lights" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.compositions') }}
                                <select v-model="formFields.categories['composition_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.compositions" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.assignements') }}
                                <select v-model="formFields.categories['assignement_id']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.assignements" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell medium-6 large-4">
                            <label>{{ __('filters.countries') }}
                                <select v-model="formFields.categories['country_code']">
                                    <option :value='null'>{{ __('manager.render-no-option') }}</option>
                                    <option v-for="option in getFilters.countries" :key="option.id" :value="option.id">{{ option.translated_name }}</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <LoaderComponent v-else></LoaderComponent>
    </div>
</template>

<script>
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
import vue2Dropzone from 'vue2-dropzone';
import RenderAPI from '@js/rendersurfer/api/render.js';
import LoaderComponent from '@js/rendersurfer/components/global/Loader';
import { FiltersMixin } from '@js/rendersurfer/mixins/filters';

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
            picture_url : null,
            dropzoneOptions : {
                url : 'https://httpbin.org/post',
                autoQueue : false,
                maxFiles : 1,
                thumbnailWidth : null,
                thumbnailHeight : 200,
                dictDefaultMessage : this.dictDefaultMessage(),
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

        template : function() {
            return `<div class="dz-preview dz-file-preview">
                      <div class="dz-image">
                          <div data-dz-thumbnail-bg></div>
                      </div>
                      <div class="dz-details">
                          <div class="dz-size"><span data-dz-size></span></div>
                          <div class="dz-filename"><span data-dz-name></span></div>
                      </div>
                      <div class="dz-error-message"><span data-dz-errormessage></span></div>
                  </div>
                `;
        },

        dictDefaultMessage: function() {
            return "<i class='fa fa-cloud-upload'></i>" + '<div>' + this.__('manager.render-label-file-from-computer') + '</div>';
        },
    },
}
</script>
