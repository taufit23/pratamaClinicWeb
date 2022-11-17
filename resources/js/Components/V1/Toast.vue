<script setup>
import { reactive, ref, toHandlers, watch } from "vue";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";

const props = defineProps({
    toast: Object,
});
const closeOn = (e) => {
    close.value = false;
};

const close = ref(true);
</script>
<template>
    <div v-if="toast && close">
        <div
            v-if="toast.type == 'success'"
            class="absolute flex max-w-xs w-full mt-2 pt-4 mr-4 top-10 bg-white right-0 rounded-l-full shadow p-4"
        >
            <div class="mr-2">
                <CIcon
                    :icon="icon.cilCheckCircle"
                    size="sm"
                    class="inline-flex items-center text-green-700 justify-center mr-2 text-center w-5 h-5"
                />
            </div>
            <div class="flex-1 text-green-800">{{ toast.message }}</div>
            <div class="ml-2">
                <button
                    @click="closeOn"
                    class="align-top text-black hover:text-red-600 focus:outline-none"
                >
                    <CIcon
                        :icon="icon.cilX"
                        size="sm"
                        class="inline-flex items-center justify-center mr-2 text-center w-5 h-5"
                    />
                </button>
            </div>
        </div>
        <div
            v-if="toast.type == 'error'"
            class="absolute flex max-w-xs w-full mt-2 pt-4 mr-4 top-10 bg-white right-0 rounded-l-full shadow p-4"
        >
            <div class="mr-2">
                <CIcon
                    :icon="icon.cilXCircle"
                    size="sm"
                    class="inline-flex items-center text-red-700 justify-center mr-2 text-center w-5 h-5"
                />
            </div>
            <div class="flex-1 text-red-800">{{ toast.message }}</div>
            <div class="ml-2">
                <button
                    @click="closeOn"
                    class="align-top text-black hover:text-red-600 focus:outline-none"
                >
                    <CIcon
                        :icon="icon.cilX"
                        size="sm"
                        class="inline-flex items-center justify-center mr-2 text-center w-5 h-5"
                    />
                </button>
            </div>
        </div>
    </div>
</template>
