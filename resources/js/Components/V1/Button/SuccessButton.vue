<script setup>
    import {
        Link
    } from '@inertiajs/inertia-vue3';
    defineProps([
        'href'
    ]);
</script>
<template>
    <Link :href="href"
        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray">
    <slot />
    </Link>
</template>
