<script setup>
    import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
    import SuccessButton from '@/Components/V1/Button/SuccessButton.vue';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/inertia-vue3';
    import {
        CIcon
    } from '@coreui/icons-vue';
    import * as icon from '@coreui/icons';
    const props = defineProps({
        user: Object,
        pasien: Object,
        rekam_mediss: Object
    });

    const form = useForm({
        cari: '',
    });
    console.log(props.rekam_mediss);
</script>
<template>
    <AuthenticatedLayout :href="route('admin.pasien.index')" :text="'Data Pasien / Username : ' + user.username">
        <div id="profile"
            class="items-center w-full bg-white rounded-lg shadow-2xl lg:w-full lg:rounded-t-lg lg:rounded-b-lg lg:mx-0">
            <div class="items-center w-full p-4 md:p-12 lg:text-left">
                <div class="grid w-auto h-auto grid-flow-row grid-rows-1 gap-2 overflow-hidden text-center sm auto-cols-auto gap-y-0">
                    <H1Name>
                        {{ pasien.name }}
                    </H1Name>
                    <div class="pt-3 mx-auto border-b-2 border-red-500 opacity-50 w-5/5 lg:mx-0"></div>
                    <div>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilUserX" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Username :
                            {{ user.username }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilLocationPin" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Alamat :
                            {{ pasien.alamat }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cifId" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Nomor KTP:
                            {{ pasien.ktp }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilCreditCard" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Nomor BPJS:
                            {{ pasien.bpjs }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilPhone" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Nomor Handphone:
                            {{ pasien.no_hp }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilHistory" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Riwayat Kunjungan: 
                            {{ rekam_mediss.length }} Kali
                        </p>
                        <div class="container flex justify-center mx-auto my-2">
                            <div class="flex flex-col">
                                <div class="w-full">
                                    <div class="border-b border-gray-200 shadow">
                                        <table class="divide-y divide-gray-300 table-fixed">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th class="px-6 py-2 text-xs text-gray-500">
                                                        Nama dokter
                                                    </th>
                                                    <th class="px-6 py-2 text-xs text-gray-500">
                                                        Keluhan
                                                    </th>
                                                    <th class="px-6 py-2 text-xs text-gray-500">
                                                        Tanggal periksa
                                                    </th>
                                                    <th class="px-6 py-2 text-xs text-gray-500">
                                                        Dignosa
                                                    </th>
                                                    <th class="px-6 py-2 text-xs text-gray-500">
                                                        Jenis penyakit
                                                    </th>
                                                    <th class="px-6 py-2 text-xs text-gray-500">
                                                        Aksi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-300">
                                                <tr class="" v-for="rekam_medis in rekam_mediss" :key="rekam_medis.id">
                                                    <td class="px-6 py-4">
                                                        <div class="text-sm text-gray-900">
                                                            <p v-if="rekam_medis.dokter != null">
                                                                {{ rekam_medis.dokter.name }}
                                                            </p>
                                                            <p v-else class="text-red-700">
                                                                Dokter belum melayani
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="text-sm text-gray-500"  v-for="keluh in rekam_medis.keluhan" :key="keluh">
                                                            {{ keluh }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        {{ rekam_medis.tanggal_periksa }}
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        <ul>
                                                            <li  v-for="diag in rekam_medis.diagnosa" :key="diag">{{ diag.title }}</li>
                                                        </ul>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        {{ rekam_medis.jenis_penyakit }}
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <Link class="px-4 py-1 mx-1 text-sm text-indigo-600 bg-indigo-200 rounded-full" :href="route('dokter.pasien.editRekamMedis',[user.id, rekam_medis.id])" v-if="rekam_medis.dokter == null" >Layani</Link>
                                                        <Link :href="route('dokter.pasien.rekam_medis', [user.id, rekam_medis.id])" class="px-4 py-1 mx-1 text-sm text-red-400 bg-sky-200 rounded-full">Detail</Link>
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

    </AuthenticatedLayout>
</template>
