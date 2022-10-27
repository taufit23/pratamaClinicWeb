
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
    users_pasien: Object,
    rekam_medis: Object,
    pembayaran_lunas: Object,
    pembayaran_belum_lunas: Object,
});
let totalHarga = 0;

for (let i = 0; i < props.pembayaran_lunas.length; i++)
{
    const a = props.pembayaran_lunas[i];
    totalHarga += a.total_bayar
}
</script>
<template>
    <AuthenticatedLayout :href="route('dashboard.index')"
                         text="Dashboard">
        <div class="flex flex-wrap my-1">
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/2">
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
                            <span v-else
                                  class="h-1 whitespace-nowrap">0</span>
                        </p>
                    </div>

                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/2">
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
                            <span v-else
                                  class="h-1 whitespace-nowrap">0</span>
                        </p>
                    </div>

                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/2">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    pasien's
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilUser"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap"
                                  v-if="users_pasien != null">
                                {{ users_pasien.length }}
                            </span>
                            <span v-else
                                  class="h-1 whitespace-nowrap">0</span>
                        </p>
                    </div>

                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/2">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Rekam medis
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilUser"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap"
                                  v-if="rekam_medis != null">
                                {{ rekam_medis.length }}
                            </span>
                            <span v-else
                                  class="h-1 whitespace-nowrap">0</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/2">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Pembayaran lunas
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilUser"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap"
                                  v-if="pembayaran_lunas != null">
                                {{ pembayaran_lunas.length }}
                            </span>
                            <span v-else
                                  class="h-1 whitespace-nowrap">0</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/2">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Pembayaran belum lunas
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilUser"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap"
                                  v-if="pembayaran_belum_lunas != null">
                                {{ pembayaran_belum_lunas.length }}
                            </span>
                            <span v-else
                                  class="h-1 whitespace-nowrap">0</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 my-1 lg:w-3/6 xl:w-1/2">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">
                                    Total
                                </h5>
                                <span class="text-xl font-semibold text-blueGray-700">
                                    Cash
                                </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                     class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <CIcon :icon="icon.cilUser"
                                           size="xxl" />
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="h-1 whitespace-nowrap"
                                  v-if="pembayaran_lunas != null">
                                Rp. {{ totalHarga }}
                            </span>
                            <span v-else
                                  class="h-1 whitespace-nowrap">0</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
