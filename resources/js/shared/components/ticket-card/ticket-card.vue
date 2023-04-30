<template>
    <div :class="cnTicketCard()">
        <h2>{{ ticket.title }}</h2>
    </div>
</template>

<script setup>
import {cnTicketCard} from "./ticket-card.const.js";

defineProps({
    ticket: Object
})
</script>

<style scoped>

</style>
