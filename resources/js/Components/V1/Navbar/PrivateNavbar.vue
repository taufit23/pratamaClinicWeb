<script setup>
    import PrivateDropdownMenu from './PrivateDropdownMenu.vue';
    import {
        Link
    } from '@inertiajs/inertia-vue3';
</script>
<template>
    <!-- Navbar -->
    <nav
        class="absolute top-0 left-0 z-10 flex items-center w-full p-4 bg-transparent md:flex-row md:flex-nowrap md:justify-start">
        <div class="flex flex-wrap items-center justify-between w-full px-4 mx-autp md:flex-nowrap md:px-10">
            <!-- Brand -->
            <Link class="hidden text-sm font-semibold text-white uppercase lg:inline-block" href="">
            <slot />
            </Link>
            <!-- User -->
            <ul class="flex-col items-center hidden list-none md:flex-row md:flex">
                <PrivateDropdownMenu></PrivateDropdownMenu>
            </ul>
        </div>
    </nav>
</template>
