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
    layanans: Object,
});

const form = useForm({
    cari: "",
});
const layanans = props.layanans.map((item) => {
    return {
        value: item.id,
        label: item.nama_layanan,
        harga: parseInt(item.harga_layanan),
    };
});
console.log($page.props.auth.user.role == "admin");
</script>
<template>
    <AuthenticatedLayout
        :href="route('dokter.pasien.index')"
        :text="
            'Data Pasien / Username : ' +
            user.username +
            ', Rekam Medis Id : ' +
            rekam_medis.id
        "
    >
        <section class="text-gray-600 body-font">
            <div class="container mx-auto">
                <div
                    class="flex flex-col flex-wrap items-center w-full text-center"
                >
                    <h1
                        class="mb-2 text-2xl font-medium text-gray-900 sm:text-3xl title-font"
                    >
                        Rekam Medis
                        <span class="text-yellow-600">{{ pasien.name }}</span>
                    </h1>
                    <p>
                        Tanggal Berkunjung :
                        {{ rekam_medis.tanggal_periksa }}
                    </p>
                    <p>Nama dokter :</p>
                </div>
                <div class="flex flex-wrap">
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                        <div
                            class="p-6 bg-white border border-gray-200 rounded-lg"
                        >
                            <div
                                class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full"
                            >
                                <CIcon :icon="icon.cilNotes" />
                            </div>
                            <h2
                                class="mb-2 text-lg font-medium text-gray-900 title-font"
                            >
                                Keluhan :
                            </h2>
                            <li
                                class="text-base leading-relaxed"
                                v-for="keluhan in rekam_medis.keluhan"
                                :key="keluhan"
                            >
                                {{ keluhan }}
                            </li>
                        </div>
                    </div>
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                        <div
                            class="p-6 bg-white border border-gray-200 rounded-lg"
                        >
                            <div
                                class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full"
                            >
                                <CIcon :icon="icon.cilVector" />
                            </div>
                            <h2
                                class="mb-2 text-lg font-medium text-gray-900 title-font"
                            >
                                Diagnosa :
                            </h2>
                            <li
                                class="text-base leading-relaxed"
                                v-for="diagnosa in rekam_medis.diagnosa"
                                :key="diagnosa"
                            >
                                {{ diagnosa }}
                            </li>
                        </div>
                    </div>
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                        <div
                            class="p-6 bg-white border border-gray-200 rounded-lg"
                        >
                            <div
                                class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full"
                            >
                                <CIcon :icon="icon.cilMoodVeryBad" />
                            </div>
                            <h2
                                class="mb-2 text-lg font-medium text-gray-900 title-font"
                            >
                                Penyakit :
                            </h2>
                            <li
                                class="text-base leading-relaxed"
                                v-for="jenis_penyakit in rekam_medis.jenis_penyakit"
                                :key="jenis_penyakit"
                            >
                                {{ jenis_penyakit }}
                            </li>
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <div
                            class="px-6 py-1 bg-white border border-gray-200 rounded-lg"
                        >
                            <div
                                v-if="$page.props.auth.user.role == 'admin'"
                                class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full"
                            >
                                <CIcon :icon="icon.cilMoney" />
                            </div>
                            <h2
                                class="mb-2 text-lg font-medium text-gray-900 title-font"
                            >
                                Kegiatan pelayanan :
                                <div
                                    class="container flex justify-center mx-auto"
                                >
                                    <div class="flex flex-col">
                                        <div class="w-full">
                                            <div
                                                class="border-b border-gray-200 shadow"
                                            >
                                                <table
                                                    class="divide-y divide-gray-300"
                                                >
                                                    <thead class="bg-gray-50">
                                                        <tr>
                                                            <th
                                                                class="px-6 py-2 text-xs text-gray-500"
                                                            >
                                                                Nama layanan
                                                            </th>
                                                            <th
                                                                class="px-6 py-2 text-xs text-gray-500"
                                                            >
                                                                Harga
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody
                                                        class="bg-white divide-y divide-gray-300"
                                                    >
                                                        <tr
                                                            class="whitespace-nowrap"
                                                            v-for="layanan in props.layanans"
                                                            :key="layanan"
                                                        >
                                                            <td
                                                                class="px-6 py-4 text-sm text-gray-500"
                                                            >
                                                                {{
                                                                    layanan.nama_layanan
                                                                }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4"
                                                            >
                                                                <div
                                                                    class="text-sm text-gray-900"
                                                                >
                                                                    Rp.
                                                                    {{
                                                                        layanan.harga_layanan
                                                                    }}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr
                                                            class="whitespace-nowrap"
                                                            v-for="(
                                                                layanan, index
                                                            ) in layanans"
                                                            :key="layanan"
                                                        >
                                                            <td
                                                                class="px-6 py-4 text-sm text-gray-500"
                                                            >
                                                                Total
                                                            </td>
                                                            <td
                                                                class="px-6 py-4"
                                                            >
                                                                <div
                                                                    class="text-sm text-gray-900"
                                                                >
                                                                    Rp.
                                                                    {{ index }}
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
                <SuccessButton
                    :href="route('dokter.pasien.show', user.id)"
                    class="flex py-3 mx-auto mt-1 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600"
                >
                    Kembali
                </SuccessButton>
                <div v-if="rekam_medis.dokter == null">
                    <div v-if="$page.props.auth.user.role == 'dokter'">
                        <SuccessButton
                            class="flex py-3 mx-auto mt-1 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600"
                        >
                            Layani
                        </SuccessButton>
                    </div>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
