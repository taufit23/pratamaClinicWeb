<script setup>
    import {
        computed
    } from 'vue';
    import {
        Link
    } from '@inertiajs/inertia-vue3';
    const props = defineProps([
        'href', 'active', 'ico', 'medhod']);

    const classes = computed(() => props.active ?
        'text-xl' :
        ''
    );
</script>
<template>
    <Link :href="href" :class="classes" :method="medhod"
        class="p-2 not-italic font-bold text-center text-gray-900 bg-white" >
    <slot />
    </Link>
</template>
