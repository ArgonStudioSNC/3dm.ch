<template>
    <div id="app">
        <div class="heading">
            <h1>Renders</h1>
        </div>
        <render-component
        v-for="render in renders"
        v-bind="render"
        :key="render.id"
        @update="update"
        @delete="del"
        ></render-component>
        <div>
            <button @click="create">Add</button>
        </div>
    </div>
</template>

<script>
function Render({ id, name, filename}) {
    this.id = id;
    this.name = name;
    this.filename = filename;
}

import RenderComponent from './components/RenderComponent.vue';

export default {
    data() {
        return {
            renders: []
        }
    },
    methods: {
        async create() {
            // To do
        },
        async read() {
            const { data } = window.axios.get('/api/renders');
            data.forEach(render => this.renders.push(new Render(render)))
        },
        async update(id, color) {
            // To do
        },
        async del(id) {
            // To do
        }
    },
    components: {
        RenderComponent
    },

    created() {
      this.read();
    }
}
</script>
