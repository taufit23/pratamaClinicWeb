<script setup>
    import PrivateNavbar from "@/Components/V1/Navbar/PrivateNavbar.vue";
    import PrivateSidebar from "@/Components/V1/Sidebar/PrivateSidebar.vue";
    import {
        Link
    } from '@inertiajs/inertia-vue3';
    import PrivateDropdownMenu from "@/Components/V1/Navbar/PrivateDropdownMenu.vue";

    const props = defineProps(['href', 'text'])
</script>
<template>
    <div>
        <PrivateSidebar></PrivateSidebar>
        <div class="relative md:ml-64 bg-blueGray-100">
            <nav
                class="absolute top-0 left-0 z-10 flex items-center w-full p-4 bg-transparent md:flex-row md:flex-nowrap md:justify-start">
                <div class="flex flex-wrap items-center justify-between w-full px-4 mx-autp md:flex-nowrap md:px-10">
                    <!-- Brand -->
                    <Link class="hidden text-sm font-semibold text-white uppercase lg:inline-block" :href="href" v-text="text">
                    </Link>
                    <!-- User -->
                    <ul class="flex-col items-center hidden list-none md:flex-row md:flex">
                        <PrivateDropdownMenu></PrivateDropdownMenu>
                    </ul>
                </div>
            </nav>
            <div class="relative pt-12 pb-32 bg-blue-400 md:pt-32">
                <div class="w-full px-4 mx-auto md:px-10">
                    <div>
                        <!-- Card stats -->
                        <slot />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>