<template>
    <h1>Testando reatividade</h1>
    <p>{{ lhpires.name }}</p>
    <p>{{ lhpires.email }}</p>

    <label for="name">NOME</label>
    <input id="name" v-model="lhpires.name">

    <br>
    <label for="email">E-mail</label>

    <input id="email" v-model="lhpires.email">

    <br>

    <Nav />

</template>

<script setup>
import { reactive } from 'vue';
import Nav from "./components/Nav.vue";


const props = defineProps({
    lhpires: Object
})
const lhpires = reactive({
    name: props.lhpires.name,
    email: props.lhpires.email
});

</script>
