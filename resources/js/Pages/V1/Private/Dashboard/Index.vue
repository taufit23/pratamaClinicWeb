<script setup>
    import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
    import PrivateLine from "@/Components/V1/Chart/PrivateLine.vue";
    import PrivateBar from "@/Components/V1/Chart/PrivateBar.vue";
    import {
        CIcon
    } from '@coreui/icons-vue';
    import * as icon from '@coreui/icons';
</script>
<template>
    <AuthenticatedLayout :href="route('dashboard.index')" text="Dashboard">
        <div class="flex flex-wrap my-1">
            <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Traffic
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    350,897
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">

                                    <CIcon :icon="icon.cilList" size="xxl" />
                                    <i class="far fa-chart-bar"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-emerald-500">
                                <i class="fas fa-arrow-up"></i> 3.48%
                            </span>
                            <span class="whitespace-nowrap">
                                Since last month
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    New users
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    2,356
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-orange-500 rounded-full shadow-lg">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-red-500">
                                <i class="fas fa-arrow-down"></i> 3.48%
                            </span>
                            <span class="whitespace-nowrap">
                                Since last week
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Sales
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    924
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-pink-500 rounded-full shadow-lg">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-orange-500">
                                <i class="fas fa-arrow-down"></i> 1.10%
                            </span>
                            <span class="whitespace-nowrap">
                                Since yesterday
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Performance
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    49,65%
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white rounded-full shadow-lg bg-lightBlue-500">
                                    <i class="fas fa-percent"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-emerald-500">
                                <i class="fas fa-arrow-up"></i> 12%
                            </span>
                            <span class="whitespace-nowrap">
                                Since last month
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap my-1">
            <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Traffic
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    350,897
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">

                                    <CIcon :icon="icon.cilList" size="xxl" />
                                    <i class="far fa-chart-bar"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-emerald-500">
                                <i class="fas fa-arrow-up"></i> 3.48%
                            </span>
                            <span class="whitespace-nowrap">
                                Since last month
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    New users
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    2,356
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-orange-500 rounded-full shadow-lg">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-red-500">
                                <i class="fas fa-arrow-down"></i> 3.48%
                            </span>
                            <span class="whitespace-nowrap">
                                Since last week
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Sales
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    924
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-pink-500 rounded-full shadow-lg">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-orange-500">
                                <i class="fas fa-arrow-down"></i> 1.10%
                            </span>
                            <span class="whitespace-nowrap">
                                Since yesterday
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Performance
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    49,65%
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white rounded-full shadow-lg bg-lightBlue-500">
                                    <i class="fas fa-percent"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-emerald-500">
                                <i class="fas fa-arrow-up"></i> 12%
                            </span>
                            <span class="whitespace-nowrap">
                                Since last month
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
