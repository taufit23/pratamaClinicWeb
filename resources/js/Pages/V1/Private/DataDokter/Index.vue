<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "@vue/reactivity";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
const props = defineProps({
    dokters: Object,
});

const form = useForm({
    cari: "",
});
</script>
<template>
    <AuthenticatedLayout :href="route('admin.dokter.index')" text="Data Dokter">
        <div
            class="flex items-baseline w-auto h-auto space-x-1 space-y-1 justify-left"
        >
            <div class="flex-auto order-none w-1/3 h-auto item">
                <SuccessButton :href="route('admin.dokter.create')" class=""
                    >Tambah</SuccessButton
                >
            </div>
            <div class="flex-auto order-none w-1/3 h-auto item">
                <form
                    class="flex items-center w-full"
                    @submit.prevent="form.get(route('admin.dokter.index'))"
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
                            placeholder="Cari berdasarkan nama pasien"
                            autofocus
                        ></TextInput>
                    </div>
                    <PrimaryButton class="mx-2 py-3">Cari</PrimaryButton>
                </form>
            </div>
        </div>
        <table class="w-full table-fixed">
            <tr class="font-bold text-left whitespace-nowrap">
                <th class="px-6 pt-6 pb-4">Username</th>
                <th class="px-6 pt-6 pb-4">Nama lengkap</th>
                <th class="px-6 pt-6 pb-4">Alamat</th>
                <th class="px-6 pt-6 pb-4">bidang</th>
                <th class="px-6 pt-6 pb-4">Aksi</th>
            </tr>
            <tr
                class="hover:bg-gray-100 focus-within:bg-gray-100"
                v-for="dokter in dokters"
                :key="dokter.id"
            >
                <td class="px-6 pt-1 pb-1">{{ dokter.user.username }}</td>
                <td class="px-6 pt-1 pb-1">{{ dokter.name }}</td>
                <td class="">{{ dokter.alamat }}</td>
                <td class="px-6 pt-1 pb-1">Poli {{ dokter.bidang }}</td>
                <td class="px-6 pt-1 pb-1" colspan="3">
                    <SuccessButton
                        class="mx-1"
                        :href="route('admin.dokter.edit', dokter.user.id)"
                        >Edit
                    </SuccessButton>
                    <SuccessButton
                        class="mx-1"
                        :href="
                            route('admin.dokter.lupa_password', dokter.user.id)
                        "
                        >Forgot password
                    </SuccessButton>
                    <!-- <SuccessButton class="mx-1">Hapus</SuccessButton> -->
                </td>
            </tr>
            <tr v-if="dokters.length === 0">
                <td class="px-6 py-4 border-t" colspan="5">
                    Data dokter kosong!!!
                </td>
            </tr>
        </table>
    </AuthenticatedLayout>
</template>
