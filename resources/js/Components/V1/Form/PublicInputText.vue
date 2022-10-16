<script setup>
    import {
        onMounted,
        ref
    } from 'vue';
    const props = defineProps([
        'modelValue',
        'placeholder',
        'label',
        'type'
    ]);
    const input = ref(null);
</script>
<template>
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        {{ label }}
    </label>
    <input
        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        :type="type" :placeholder="placeholder" :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)" ref="input">
</template>