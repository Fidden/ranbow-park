<template>
    <PageLayout>
        <main :class="cnIndexScreen()">
            <IndexScreenModal/>
        </main>
    </PageLayout>
</template>

<script setup>
import PageLayout from "@/shared/layouts/page-layout/page-layout.vue";
import {cnIndexScreen} from "./index-screen.const.js";
import IndexScreenModal from "./index-screen__modal.vue";
</script>

<style scoped>

</style>
