<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
const props = defineProps({
    pasiens: Object,
});

const form = useForm({
    cari: "",
});
</script>
<template>
    <AuthenticatedLayout :href="route('admin.pasien.index')" text="Data Pasien">
        <div
            class="flex items-baseline w-auto h-auto space-x-1 space-y-1 justify-left"
        >
            <div class="flex-auto order-none w-1/3 h-auto item">
                <SuccessButton :href="route('admin.pasien.create')" class=""
                    >Tambah</SuccessButton
                >
            </div>
            <div class="flex-auto order-none w-1/3 h-auto item">
                <form
                    class="flex items-center w-full"
                    @submit.prevent="form.get(route('admin.pasien.index'))"
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
                    <PrimaryButton class="py-3 mx-2">Cari</PrimaryButton>
                </form>
            </div>
        </div>
        <table class="w-full table-fixed">
            <tr class="font-bold text-left">
                <th class="px-6 pt-6 pb-4">Username</th>
                <th class="px-6 pt-6 pb-4">Nama lengkap</th>
                <th class="px-6 pt-6 pb-4">Alamat</th>
                <th class="px-6 pt-6 pb-4">Jenis kelamin</th>
                <th class="px-6 pt-6 pb-4">Aksi</th>
            </tr>
            <tr
                class="hover:bg-gray-100 focus-within:bg-gray-100"
                v-for="pasien in pasiens"
                :key="pasien.id"
            >
                <td class="px-6 pt-3 pb-2 text-yellow-900">
                    <Link
                        class=""
                        :href="route('admin.pasien.show', pasien.user.id)"
                    >
                        {{ pasien.user.username }}
                        <CIcon
                            :icon="icon.cilChevronRight"
                            size="sm"
                            class="inline-flex items-center justify-center w-5 h-5 mr-2 text-center"
                        />
                    </Link>
                </td>
                <td class="px-6 pt-3 pb-2">{{ pasien.name }}</td>
                <td class="px-6 pt-3 pb-2 text-truncate">
                    {{ pasien.alamat }}
                </td>
                <td class="px-6 pt-3 pb-2">{{ pasien.jenis_kelamin }}</td>
                <td class="px-6 pt-3 pb-2" colspan="3">
                    <SuccessButton
                        class="mx-1"
                        :href="
                            route('admin.pasien.lupa_password', pasien.user.id)
                        "
                        >Forgot password</SuccessButton
                    >
                    <SuccessButton
                        class="mx-1"
                        :href="
                            route(
                                'admin.pasien.addMedicalRecord',
                                pasien.user.id
                            )
                        "
                        >Tambah kunjungan</SuccessButton
                    >
                </td>
            </tr>
            <tr v-if="pasiens.length === 0">
                <td class="px-6 py-4 border-t" colspan="5">
                    Data pasien kosong!!!
                </td>
            </tr>
        </table>
    </AuthenticatedLayout>
</template>
