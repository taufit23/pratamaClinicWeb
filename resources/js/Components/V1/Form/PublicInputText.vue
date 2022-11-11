<script setup>
import { onMounted, ref } from "vue";
const props = defineProps([
    "modelValue",
    "placeholder",
    "label",
    "type",
    "disable",
]);
const input = ref(null);
onMounted(() => {
    if (input.value.hasAttribute("autofocus")) {
        input.value.focus();
    }
    if (input.value.hasAttribute("disabled")) {
        input.value.disabled();
    }
});
</script>
<template>
    <label
        class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
    >
        {{ label }}
    </label>
    <input
        class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
        :type="type"
        :placeholder="placeholder"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
        :disablad="true"
    />
</template>
