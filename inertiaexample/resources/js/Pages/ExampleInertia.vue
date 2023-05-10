<template>
	<h1>{{ counter }}</h1>
	<p>
		<button @click="increment()">+ Increment</button>
	</p>
	<p>
		<button @click="minus()">- Minus</button>
	</p>
	<p>
		<button @click="restorecounter()">Restore</button>
	</p>
	<NavLink :href="route('login')">Login</NavLink>
</template>

<script setup>
import { ref } from 'vue';
import NavLink from '@/Components/NavLink.vue';
const counter = ref(0);
const increment = () => {
	counter.value++;
};
const minus = () => {
	counter.value--;
};
const restorecounter = () => {
	counter.value = 0;
};
</script>

<style scoped></style>
