<template>
    <IndexScreen/>
</template>

<script setup>
import IndexScreen from "@/screens/index-screen/index-screen.vue";
import {indexScreenModel} from "@/screens/index-screen/index-screen.model.js";

const props = defineProps({
    tickets: Array
});

const model = indexScreenModel();
model.init(props.tickets);
</script>
