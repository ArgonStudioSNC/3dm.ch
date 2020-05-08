<style lang="scss">
@import '~@/abstracts/_settings.scss';
@import '~@/mixins';

.render-card {
    max-width: 100%;
    position: relative;
    .render-card-legend {
        color: $white;
        padding: 1em;
        z-index: 10;
        position: absolute;
        opacity: 0;
        @include transition(opacity 0.3s);

        .render-card-header {
            font-weight: 400;
        }

        .render-card-tag {
            margin-bottom: 4px;
            margin-right: 3px;
            padding: 0 6px;
            background-color: $primary-color;
            border-radius: 1em;
            border: 1px solid $primary-color;

        }
    }
    img {
        @include transition(filter 0.3s);
    }

    &.active {
        .render-card-legend {
            position: absolute;
            opacity: 1!important;
        }
        img {
            filter: brightness(60%);
        }
    }
}

.loading-container {
    .loading-bars {
        display: inline-block;
        position: relative;
        width: 60px;
        height: 60px;
        opacity: 0.6;

        div {
            display: inline-block;
            position: absolute;
            left: 6px;
            width: 12px;
            background: $primary-color;
            animation: loading-bars 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
        }
        div:nth-child(1) {
            left: 6px;
            animation-delay: -0.24s;
        }
        div:nth-child(2) {
            left: 24px;
            animation-delay: -0.12s;
        }
        div:nth-child(3) {
            left: 42px;
            animation-delay: 0;
        }

        @keyframes loading-bars {
            0% {
                top: 6px;
                height: 48px;
            }
            50%, 100% {
                top: 18px;
                height: 24px;
            }
        }
    }
}

</style>

<template>
    <div ref="brick" class="masonry-brick">
        <div class="masonry-content">
            <template v-if="base64Data">
                <div class="render-card" @mouseover="hover = true" @mouseleave="hover = false" :class="{ active: hover }">
                    <div class="render-card-legend">
                        <div class="render-card-header">
                            <h5>{{ render.name }}</h5>
                        </div>
                        <div class="grid-x">
                            <div class="render-card-tag cell shrink" v-if="getYear()">{{ getYear() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getOffice()">{{ getOffice() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getType()">{{ getType() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getStyle()">{{ getStyle() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getSeasontime()">{{ getSeasontime() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getWeather()">{{ getWeather() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getDaytime()">{{ getDaytime() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getLight()">{{ getLight() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getComposition()">{{ getComposition() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getAssignement()">{{ getAssignement() }}</div>
                            <div class="render-card-tag cell shrink" v-if="getCountry()">{{ getCountry() }}</div>
                        </div>
                    </div>
                    <img style="width:100%;" @load="resizeMasonryItem($refs.brick)" :src="base64Data" />
                </div>
            </template>
            <template v-else>
                <div class="grid-x align-center-middle loading-container">
                    <div class="call loading-bars"><div></div><div></div><div></div></div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
import RenderAPI from '../../api/render.js';
import { MasonryMixin } from '../../mixins/masonry';
import { FiltersMixin } from '../../mixins/filters';

export default {
    props: {
        render : {
            type: Object,
            required: true,
        },
    },

    mixins: [FiltersMixin, MasonryMixin],

    data () {
        return {
            base64Data : null,
            hover : false,
        }
    },

    created() {
        var reader = new FileReader();
        reader.onload = r => {
            this.base64Data = reader.result;
        };

        RenderAPI.picture(this.render.filename, 'small')
        .then( response => {
            reader.readAsDataURL(response.data);
        });
    },

    mounted() {
        this.resizeMasonryItem(this.$refs.brick)
    },

    methods: {
        getProperty(filter_key, render_key){
            var result = this.filters[filter_key].find(elem => elem.id === this.render[render_key]);
            return result ? result.name : null;
        },
        getYear() {
            return this.render.year;
        },
        getOffice() {
            return this.getProperty('offices', 'office_id');
        },
        getType() {
            return this.getProperty('types', 'type_id');
        },
        getStyle() {
            return this.getProperty('styles', 'style_id');
        },
        getSeasontime() {
            return this.getProperty('seasontimes', 'seasontime_id');
        },
        getWeather() {
            return this.getProperty('weather', 'weather_id');
        },
        getDaytime() {
            return this.getProperty('daytimes', 'daytime_id');
        },
        getLight() {
            return this.getProperty('lights', 'light_id');
        },
        getComposition() {
            return this.getProperty('compositions', 'composition_id');
        },
        getAssignement() {
            return this.getProperty('assignements', 'assignement_id');
        },
        getCountry() {
            return this.getProperty('countries', 'country_code');
        },
    },
}
</script>
