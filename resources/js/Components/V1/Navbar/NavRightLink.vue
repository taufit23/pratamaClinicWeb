<script setup>
    import { computed } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    const props = defineProps(['href', 'active']);

    const classes = computed(() => props.active
        ? 'bg-green-400'
        : 'bg-transparent'
    );
</script>
<template>
    <Link :href="href" :class="classes"
        class="inline-block px-6 py-1.5 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-gray-100 focus:text-blue-700 focus:bg-gray-100 focus:outline-none focus:ring-0 active:text-blue-800 transition duration-300 ease-in-out ">
    <slot />
    </Link>
</template>