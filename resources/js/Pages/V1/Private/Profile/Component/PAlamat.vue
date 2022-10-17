<script setup>
    import {
        CIcon
    } from '@coreui/icons-vue';
    import * as icon from '@coreui/icons';
</script>

<template>

    <p class="flex items-center justify-center pt-2 text-xs text-gray-600 lg:text-sm lg:justify-start">
        <CIcon :icon="icon.cilLocationPin" size="sm" class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
        <slot/>
    </p>

</template>