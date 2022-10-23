<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
const props = defineProps({
    rekam_medis: Object,
});
const form = useForm({
    cari: "",
});
</script>
<template>
    <AuthenticatedLayout
        :href="route('admin.rekamMedis.index')"
        text="Data rekam medis"
    >
        <div class="container flex justify-center mx-auto">
            <div class="flex flex-col">
                <form
                    class="flex items-center w-full my-3"
                    @submit.prevent="form.get(route('admin.rekamMedis.index'))"
                >
                    <div class="relative w-full">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                        >
                            <CIcon
                                :icon="icon.cilSearch"
                                size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mr-2 text-center"
                            />
                        </div>
                        <TextInput
                            v-model="form.cari"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari berdasarkan nama pasien / Tanggal kunjungan"
                            autofocus
                        ></TextInput>
                    </div>
                    <PrimaryButton class="mx-2 py-3">Cari</PrimaryButton>
                </form>
                <div class="w-full">
                    <div class="border-b border-gray-200 shadow">
                        <table class="divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Pasien
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Tanggal Kunjungan
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Nama dokter
                                    </th>

                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300">
                                <tr
                                    class="whitespace-nowrap"
                                    v-for="record in rekam_medis"
                                    :key="record.id"
                                >
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ record.pasien.name }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                            {{ record.tanggal_periksa }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div
                                            class="text-sm text-gray-900"
                                            v-if="record.dokter != null"
                                        >
                                            {{ record.dokter.name }}
                                        </div>
                                        <div
                                            class="text-sm text-red-500"
                                            v-else
                                        >
                                            Dokter belum melayani
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <SuccessButton
                                            class="mx-1"
                                            :href="
                                                route(
                                                    'dokter.pasien.rekam_medis',
                                                    [record.user.id, record.id]
                                                )
                                            "
                                            >Detail</SuccessButton
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
