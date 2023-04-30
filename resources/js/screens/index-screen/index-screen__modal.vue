<template>
    <form
        @submit.prevent="model.submit"
        :class="cnIndexScreen('modal')"
    >
        <select v-model="model.form.ticket_id">
            <option
                v-for="ticket in model.tickets"
                :key="ticket.id"
                :value="ticket.id"
            >
                {{ ticket.title }} - {{ ticket.price }}
            </option>
        </select>
        <input
            placeholder="Email"
            id="first_name"
            v-model="model.form.email"
        />
        <div v-if="model.form.errors?.email">
            {{ model.form.errors.email }}
        </div>
        <button type="submit">Submit</button>
    </form>
</template>

<script setup>
import {cnIndexScreen} from "./index-screen.const.js";
import {indexScreenModel} from "./index-screen.model.js";

const model = indexScreenModel();
</script>

<style scoped>

</style>
