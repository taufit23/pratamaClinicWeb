<script setup>
import { Link } from '@inertiajs/inertia-vue3';
defineProps([
    'href'
])
</script>
<template>
    <Link class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
        :href="href">
        <slot/>
    </Link>
</template>