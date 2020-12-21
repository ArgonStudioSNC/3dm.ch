import _ from 'lodash';

export const RendersMixin = {

    methods: {
        getProperty: function(render, filter_key, render_key){
            if (!render || this.$store.getters.getFiltersLoadStatus != 2) return null;

            var filters = this.$store.getters.getFilters;
            var result = filters[filter_key].find(elem => elem.id === render[render_key]);
            return result ? result.name : null;
        },

        getOffice: function(r) {
            return this.getProperty(r, 'offices', 'office_id');
        },
        getType: function(r) {
            return this.getProperty(r, 'types', 'type_id');
        },
        getStyle: function(r) {
            return this.getProperty(r, 'styles', 'style_id');
        },
        getSeasontime: function(r) {
            return this.getProperty(r, 'seasontimes', 'seasontime_id');
        },
        getWeather: function(r) {
            return this.getProperty(r, 'weather', 'weather_id');
        },
        getDaytime: function(r) {
            return this.getProperty(r, 'daytimes', 'daytime_id');
        },
        getLight: function(r) {
            return this.getProperty(r, 'lights', 'light_id');
        },
        getComposition: function(r) {
            return this.getProperty(r, 'compositions', 'composition_id');
        },
        getAssignement: function(r) {
            return this.getProperty(r, 'assignements', 'assignement_id');
        },
        getCountry: function(r) {
            return this.getProperty(r, 'countries', 'country_code');
        },
    },

    computed: {
        getRenders: function() {
            if(this.$store.getters.getRendersLoadStatus !== 2) return null;
            return this.$store.getters.getRenders;
        },

        getRendersLoadStatus: function() {
            return this.$store.getters.getRendersLoadStatus;
        },

        getRender: function() {
            if(this.$store.getters.getRenderLoadStatus !== 2) return null;
            return this.$store.getters.getRender;
        },

        getRenderLoadStatus: function() {
            return this.$store.getters.getRenderLoadStatus;
        },

        getRenderAddStatus: function() {
            return this.$store.getters.getRenderAddStatus;
        },

        getRenderUpdateStatus: function() {
            return this.$store.getters.getRenderUpdateStatus;
        },

        getRenderDeleteStatus: function() {
            return this.$store.getters.getRenderDeleteStatus;
        },
    },
}
