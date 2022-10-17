<script setup>
    import {
        computed
    } from 'vue';
    import {
        Link
    } from '@inertiajs/inertia-vue3';

    const props = defineProps(['href', 'active']);

    const classes = computed(() => props.active ?
        ' text-pink-500 uppercase hover:text-pink-600' :
        ''
    );
</script>
<template>
    <li class="items-center" :class="classes">
        <Link :href="href"
            class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500">
        <slot />
        </Link>
    </li>
</template>