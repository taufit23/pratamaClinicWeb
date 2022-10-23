<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
const props = defineProps({
    admins: Object,
});
const form = useForm({
    cari: "",
});
</script>
<template>
    <AuthenticatedLayout
        :href="route('admin.admins.index')"
        text="Data rekam medis"
    >
        <div class="container flex justify-center mx-auto">
            <div class="flex flex-col">
                <div
                    class="flex items-baseline w-auto h-auto space-x-1 space-y-1 justify-left"
                >
                    <div class="flex-auto order-none w-1/4 h-auto item">
                        <SuccessButton :href="route('admin.admins.create')"
                            >Tambah</SuccessButton
                        >
                    </div>
                    <div class="w-1/1">
                        <form
                            class="flex items-center w-full my-3"
                            @submit.prevent="
                                form.get(route('admin.admins.index'))
                            "
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
                                    placeholder="Cari berdasarkan nama"
                                    autofocus
                                ></TextInput>
                            </div>
                            <PrimaryButton class="mx-2 py-3"
                                >Cari</PrimaryButton
                            >
                        </form>
                    </div>
                </div>
                <div class="w-full">
                    <div class="border-b border-gray-200 shadow">
                        <table class="divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Nama
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300">
                                <tr
                                    v-for="admin in admins"
                                    :key="admin.id"
                                    class="whitespace-nowrap"
                                >
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ admin.admin.name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <SuccessButton
                                            :href="
                                                route(
                                                    'admin.admins.lupaPassword',
                                                    admin.id
                                                )
                                            "
                                            class="mx-1"
                                            >Lupa Password</SuccessButton
                                        >
                                        <SuccessButton
                                            :href="
                                                route(
                                                    'admin.admins.destroy',
                                                    admin.id
                                                )
                                            "
                                            class="mx-1"
                                            >Hapus</SuccessButton
                                        >
                                    </td>
                                </tr>
                                <tr v-if="admins.length == 0">
                                    <td colspan="2">Data kosong</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
