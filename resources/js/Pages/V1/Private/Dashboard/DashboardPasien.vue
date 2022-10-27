
<script setup>
import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
import PrivateLine from "@/Components/V1/Chart/PrivateLine.vue";
import PrivateBar from "@/Components/V1/Chart/PrivateBar.vue";
import
{
    CIcon
} from '@coreui/icons-vue';
import * as icon from '@coreui/icons';
const props = defineProps({
    users_admin: Object,
    users_dokter: Object,
    rekam_medis: Object,
    dokter_umum: Object,
    dokter_gigi: Object,
});
</script>
<template>
    <AuthenticatedLayout :href="route('dashboard.index')"
                         text="Dashboard">
        <div class="flex flex-wrap my-1">
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Admin's
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilUserX"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap"
                                  v-if="users_admin != null">
                                {{ users_admin.length }}
                            </span>
                            <span class="h-1 whitespace-nowrap"
                                  v-else>0</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Dokter's
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilHospital"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap"
                                  v-if="users_dokter != null">
                                {{ users_dokter.length }}
                            </span>
                            <span class="h-1 whitespace-nowrap"
                                  v-else>0</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Kunjugan
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilHospital"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap"
                                  v-if="rekam_medis != null">
                                {{ rekam_medis.length }}
                            </span>
                            <span class="h-1 whitespace-nowrap"
                                  v-else>0</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Dokter umum
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilHospital"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap">
                                {{ dokter_umum.length }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Dokter gigi
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilHospital"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap">
                                {{ dokter_gigi.length }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- about klinik -->
        <div class="p-4 md:w-1/1">
            <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
                <div class="p-6">
                    <h1 class="mb-1 text-lg font-medium text-gray-900 title-font">Klinik pratama</h1>
                    <p class="mb-1 leading-relaxed">
                        KESEMBUHAN PASIEN ADALAH KEBAHAGIAAN KAMI
                    </p>
                    <div class="flex flex-wrap items-center">
                        <div class="p-2 md:w-1/2">
                            <div class="p-6">
                                <h1 class="mb-1 text-lg font-medium text-gray-900 title-font">Visi</h1>
                                <ul>
                                    <li>MENJADI KLINIK PILIHAN UTAMA MASYARAKAT
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-2 md:w-1/2">
                            <div class="p-6">
                                <h1 class="mb-1 text-lg font-medium text-gray-900 title-font">Misi</h1>
                                <ul class="list-none ">
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                      class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                    <CIcon :icon="icon.cilCaretRight"
                                                           size="sm"
                                                           class="w-4 h-4" />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Memberikan pelayanan prefentif, kuratif dan rehabilitative yang
                                                    komprehensif dan berkesinambungan
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                      class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                    <CIcon :icon="icon.cilCaretRight"
                                                           size="sm"
                                                           class="w-4 h-4" />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Memberikan pelayanan kesehatan bermutu dan mengutamakan kepuasan
                                                    pasien
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                      class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                    <CIcon :icon="icon.cilCaretRight"
                                                           size="sm"
                                                           class="w-4 h-4" />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Menyediakan sarana dan prasarana bermutu baik & terpercaya
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                      class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                    <CIcon :icon="icon.cilCaretRight"
                                                           size="sm"
                                                           class="w-4 h-4" />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Menyediakan SDM yang professional, kreatif, santun dan berakhlak
                                                    mulia
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                      class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                    <CIcon :icon="icon.cilCaretRight"
                                                           size="sm"
                                                           class="w-4 h-4" />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Membantu menyukseskan program pemerintah yaitu Jaminan Kesehatan
                                                    Nasional (JKN).

                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
