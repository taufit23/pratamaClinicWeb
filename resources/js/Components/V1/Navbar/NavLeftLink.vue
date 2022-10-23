<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { propsToAttrMap } from "@vue/shared";
import { computed } from "vue";

defineProps(["href", "active"]);

const classes = computed(() =>
    propsToAttrMap.active
        ? "bg-white-500 lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
        : "bg-transparent lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
);
</script>
<template>
    <Link :href="href" :class="classes">
        <i
            class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"
        ></i>
        <slot />
    </Link>
</template>
