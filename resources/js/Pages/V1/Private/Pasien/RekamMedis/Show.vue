<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";

const props = defineProps({
    rekam_medis: Object,
    resep_obat: Object,
    pembayaran: Object,
});
</script>
<template>
    <AuthenticatedLayout
        :href="route('dokter.pasien.index')"
        :text="'Data Pasien / Username : '"
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
                        <span class="text-yellow-600">{{
                            $page.props.auth.user.pasien.name
                        }}</span>
                    </h1>
                    <p>
                        Tanggal Berkunjung :
                        {{ rekam_medis.tanggal_periksa }}
                    </p>
                    <p v-if="rekam_medis.dokter_id == null">
                        Nama dokter :<span class="text-red-500">
                            Belum dilayani
                        </span>
                    </p>
                    <p v-else>Nama dokter : {{ rekam_medis.dokter.name }}</p>
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
                                <span
                                    class="text-red-500"
                                    v-if="rekam_medis.dokter_id == null"
                                >
                                    Belum dilayani
                                </span>
                                <div
                                    v-if="rekam_medis.dokter_id != null"
                                    class="container flex justify-center mx-auto"
                                >
                                    <div class="flex flex-col">
                                        <div class="w-full">
                                            <div
                                                class="border-b border-gray-200 shadow"
                                            >
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
                                                                    <thead
                                                                        class="bg-gray-50"
                                                                    >
                                                                        <tr>
                                                                            <th
                                                                                class="px-6 py-2 text-xs text-gray-500"
                                                                            >
                                                                                Nama
                                                                                layanan
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-2 text-xs text-gray-500"
                                                                            >
                                                                                Harga
                                                                                layanan
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-2 text-xs text-gray-500"
                                                                            >
                                                                                Nama
                                                                                obat
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-2 text-xs text-gray-500"
                                                                            >
                                                                                Harga
                                                                                Obat
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-2 text-xs text-gray-500"
                                                                            >
                                                                                Total
                                                                                harga
                                                                                Obat
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-2 text-xs text-gray-500"
                                                                            >
                                                                                Konsumsi
                                                                                harian
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-2 text-xs text-gray-500"
                                                                            >
                                                                                Hari
                                                                                konsumsi
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-2 text-xs text-gray-500"
                                                                            >
                                                                                Stok
                                                                                terpakai
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody
                                                                        class="bg-white divide-y divide-gray-300"
                                                                    >
                                                                        <tr
                                                                            class="whitespace-nowrap"
                                                                            v-for="layanan in props
                                                                                .rekam_medis
                                                                                .layanan"
                                                                            :key="
                                                                                layanan
                                                                            "
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
                                                                            v-for="obat in props
                                                                                .resep_obat
                                                                                .obat"
                                                                            :key="
                                                                                obat
                                                                            "
                                                                        >
                                                                            <td
                                                                                class="px-6 py-4 text-sm text-gray-500"
                                                                            ></td>
                                                                            <td
                                                                                class="px-6 py-4 text-sm text-gray-500"
                                                                            ></td>
                                                                            <td
                                                                                class="px-6 py-4 text-sm text-gray-500"
                                                                            >
                                                                                {{
                                                                                    obat.nama_obat
                                                                                }}
                                                                            </td>
                                                                            <td
                                                                                class="px-6 py-4 text-sm text-gray-500"
                                                                            >
                                                                                Rp.
                                                                                {{
                                                                                    obat.harga_obat
                                                                                }}
                                                                            </td>
                                                                            <td
                                                                                class="px-6 py-4 text-sm text-gray-500"
                                                                            >
                                                                                Rp.
                                                                                {{
                                                                                    obat.harga_obat *
                                                                                    (resep_obat.total_hari *
                                                                                        resep_obat.konsumsi_harian)
                                                                                }}
                                                                            </td>
                                                                            <td
                                                                                class="px-6 py-4 text-sm text-gray-500"
                                                                            >
                                                                                {{
                                                                                    resep_obat.konsumsi_harian
                                                                                }}
                                                                                x
                                                                                sehari
                                                                            </td>
                                                                            <td
                                                                                class="px-6 py-4 text-sm text-gray-500"
                                                                            >
                                                                                {{
                                                                                    resep_obat.total_hari
                                                                                }}
                                                                                Hari
                                                                            </td>
                                                                            <td
                                                                                class="px-6 py-4 text-sm text-gray-500"
                                                                            >
                                                                                {{
                                                                                    resep_obat.total_hari *
                                                                                    resep_obat.konsumsi_harian
                                                                                }}
                                                                                butir
                                                                            </td>
                                                                        </tr>
                                                                        <tr
                                                                            class="whitespace-nowrap"
                                                                        >
                                                                            <td
                                                                                colspan="7"
                                                                            >
                                                                                Total
                                                                                bayar
                                                                            </td>
                                                                            <td>
                                                                                Rp.
                                                                                {{
                                                                                    pembayaran.total_bayar
                                                                                }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr
                                                                            class="whitespace-nowrap"
                                                                        >
                                                                            <td
                                                                                colspan="7"
                                                                            >
                                                                                Status
                                                                                bayar
                                                                            </td>
                                                                            <td>
                                                                                <div
                                                                                    class="text-sm text-gray-900"
                                                                                    v-if="
                                                                                        pembayaran.status_bayar ==
                                                                                        null
                                                                                    "
                                                                                >
                                                                                    Belum
                                                                                    bayar
                                                                                </div>
                                                                                <div
                                                                                    v-else
                                                                                    class="text-sm text-gray-900"
                                                                                >
                                                                                    Lunas
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
