<script setup>
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
const props = defineProps(["head"]);
</script>
<template>
    <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/2">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0"
        >
            <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                    <div
                        class="relative flex-1 flex-grow w-full max-w-full pr-4"
                    >
                        <h5
                            class="text-xs font-bold uppercase text-blueGray-400"
                        >
                            Total
                        </h5>
                        <span class="text-xl font-semibold text-blueGray-700">
                            {{ head }}
                        </span>
                    </div>
                    <slot name="icon"></slot>
                </div>
                <slot name="counter"> </slot>
            </div>
        </div>
    </div>
</template>
