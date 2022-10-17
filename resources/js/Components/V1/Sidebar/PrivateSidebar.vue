<script setup>
    import PrivateDropdown from "../Notification/PrivateDropdown.vue";
    import PrivateDropdownMenu from "../Navbar/PrivateDropdownMenu.vue";
    import BrandLogo from "./BrandLogo.vue";
    import {
        CIcon
    } from '@coreui/icons-vue';
    import * as icon from '@coreui/icons';
    import PrivateSideLink from "./PrivateSideLink.vue";
</script>
<template>
    <nav
        class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64">
        <div
            class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap">
            <!-- Toggler -->
            <button
                class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
                type="button" v-on:click="toggleCollapseShow('bg-white m-2 py-3 px-6')">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                    <CIcon :icon="icon.cilList" size="xxl" />
                </div>
            </button>
            <!-- Brand -->
            <BrandLogo :href="route('dashboard.index')">Klinik Pratama</BrandLogo>
            
            <!-- User -->
            <ul class="flex flex-wrap items-center list-none md:hidden">
                <li class="relative inline-block">
                    <PrivateDropdown></PrivateDropdown>
                </li>
                <li class="relative inline-block">
                    <PrivateDropdownMenu></PrivateDropdownMenu>
                </li>
            </ul>
            <!-- Collapse -->
            <div class="absolute top-0 left-0 right-0 z-40 items-center flex-1 h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none"
                v-bind:class="collapseShow">
                <!-- Navigation -->
                <ul class="flex flex-col list-none md:flex-col md:min-w-full">
                    <PrivateSideLink v-if="$page.props.auth.user.role == 'pasien'" :href="route('dashboard.index')"
                        :active="route().current('dashboard.index')">
                        <CIcon :icon="icon.cilTv" size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9" />
                        Dashboard {{ $page.props.auth.user.role  }}
                    </PrivateSideLink>
                    <PrivateSideLink v-if="$page.props.auth.user.role == 'dokter'" :href="route('dashboard.index')" :active="route().current('dashboard.index')">
                        <CIcon :icon="icon.cilTv" size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9" />
                        Dashboard
                        {{ $page.props.auth.user.role  }}
                    </PrivateSideLink>
                    <PrivateSideLink v-if="$page.props.auth.user.role == 'admin'" :href="route('dashboard.index')" :active="route().current('dashboard.index')">
                        <CIcon :icon="icon.cilTv" size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9" />
                        Dashboard
                        {{ $page.props.auth.user.role  }}
                    </PrivateSideLink>

                </ul>
            </div>
        </div>
    </nav>
</template>