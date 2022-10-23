<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";

const props = defineProps({
    user: Object,
    rekam_medis: Object,
    pasien: Object,
    layanans: Object
});

const form = useForm({
    cari: "",
});
const layanans = props.layanans.map((item) =>
{
    return {
        value: item.id,
        label: item.nama_layanan,
        harga: parseInt(item.harga_layanan),
    };

});
console.log();
</script>
<template>
    <AuthenticatedLayout :href="route('dokter.pasien.index')"
                         :text="
                             'Data Pasien / Username : ' +
                             user.username +
                             ', Rekam Medis Id : ' +
                             rekam_medis.id
                         ">
        <section class="text-gray-600 body-font">
            <div class="container mx-auto">
                <div class="flex flex-wrap w-full flex-col items-center text-center">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                        Rekam Medis
                        <span class="text-yellow-600">{{ pasien.name }}</span>
                    </h1>
                    <p>
                        Tanggal Berkunjung :
                        {{ rekam_medis.tanggal_periksa }}
                    </p>
                </div>
                <div class="flex flex-wrap">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg bg-white">
                            <div
                                 class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <CIcon :icon="icon.cilNotes" />
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                                Keluhan :
                            </h2>
                            <li class="leading-relaxed text-base"
                                v-for="keluhan in rekam_medis.keluhan"
                                :key="keluhan">
                                {{ keluhan }}
                            </li>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg bg-white">
                            <div
                                 class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <CIcon :icon="icon.cilVector" />
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                                Diagnosa :
                            </h2>
                            <li class="leading-relaxed text-base"
                                v-for="diagnosa in rekam_medis.diagnosa"
                                :key="diagnosa">
                                {{ diagnosa }}
                            </li>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg bg-white">
                            <div
                                 class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <CIcon :icon="icon.cilMoodVeryBad" />
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                                Penyakit :
                            </h2>
                            <li class="leading-relaxed text-base"
                                v-for="jenis_penyakit in rekam_medis.jenis_penyakit"
                                :key="jenis_penyakit">
                                {{ jenis_penyakit }}
                            </li>
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <div class="border border-gray-200 px-6 py-1 rounded-lg bg-white">
                            <div v-if="$page.props.auth.user.role == 'admin'"
                                 class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <CIcon :icon="icon.cilMoney" />
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                                Kegiatan pelayanan :
                                <div class="container flex justify-center mx-auto">
                                    <div class="flex flex-col">
                                        <div class="w-full">
                                            <div class="border-b border-gray-200 shadow">
                                                <table class="divide-y divide-gray-300 ">
                                                    <thead class="bg-gray-50">
                                                        <tr>
                                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                                Nama layanan
                                                            </th>
                                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                                Harga
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-300">
                                                        <tr class="whitespace-nowrap"
                                                            v-for="layanan in props.layanans"
                                                            :key="layanan">
                                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                                {{ layanan.nama_layanan }}
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <div class="text-sm text-gray-900">
                                                                    Rp. {{ layanan.harga_layanan }}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="whitespace-nowrap"
                                                            v-for="(layanan, index) in layanans"
                                                            :key="layanan">
                                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                                Total
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <div class="text-sm text-gray-900">
                                                                    Rp. {{ index }}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>
                <SuccessButton :href="route('dokter.pasien.show', user.id)"
                               class="flex mx-auto mt-1 text-white bg-indigo-500 border-0 py-3 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    Kembali
                </SuccessButton>
                <SuccessButton :href="
                    route('dokter.pasien.editRekamMedis', [
                        user.id,
                        rekam_medis.id,
                    ])
                "
                               v-if="rekam_medis.dokter == null && $page.props.auth.user.role == 'dokter'"
                               class="flex mx-auto mt-1 text-white bg-indigo-500 border-0 py-3 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    Layani
                </SuccessButton>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
