<template>
    <div :class="cnPageLayout()">
        <slot/>
    </div>
</template>

<script setup>
import {cnPageLayout} from './page-layout.const.js'
</script>

<style scoped>

</style>
