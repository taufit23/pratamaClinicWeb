<script setup>
    import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
    import PublicInputText from "@/Components/V1/Form/PublicInputText.vue";
    import InputError from "@/Components/InputError.vue";
    import {
        Head,
        Link,
        useForm
    } from "@inertiajs/inertia-vue3";
    import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";

    const props = defineProps({
        layanans: Object,
    });
    const form = useForm({
        cari: "",
    });
</script>
<template>
    <AuthenticatedLayout :href="route('admin.layanan.index')" :text="'Data Layanan'">
        <div class="flex items-baseline w-auto h-auto space-x-1 space-y-1 justify-left">
            <div class="flex-auto order-none mb-2 h-auto item">
                <SuccessButton :href="route('admin.layanan.create')">Tambah layanan</SuccessButton>
            </div>
            <div class="flex-auto order-none w-1/3 h-auto item">
                <form class="flex items-center" @submit.prevent="form.get(route('admin.layanan.index'))">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari berdasarkan nama layanan" v-model="form.cari" />
                    </div>
                    <button type="submit"
                        class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <table class="w-full table-fixed bg-white">
            <tr class="font-bold text-left">
                <th class="px-6 py-2 text-xs text-gray-500">Nama layanan</th>
                <th class="px-6 py-2 text-xs text-gray-500">Harga layanan</th>
                <th class="px-6 py-2 text-xs text-gray-500">Aksi</th>
            </tr>
            <tr class="hover:bg-gray-100 focus-within:bg-gray-100" v-for="layanan in layanans" :key="layanan.id">
                <td class="px-6 py-4">
                    {{ layanan . nama_layanan }}
                </td>
                <td class="px-6 py-4">Rp. {{ layanan . harga_layanan }}</td>
                <td class="px-6 py-4">
                    <SuccessButton class="mx-1" :href="route('admin.layanan.edit', layanan.id)">Edit</SuccessButton>
                    <SuccessButton class="mx-1" :href="route('admin.layanan.destroy', layanan.id)">Hapus
                    </SuccessButton>
                </td>
            </tr>
            <tr v-if="layanans.length === 0">
                <td class="px-6 py-4 border-t" colspan="3">
                    Data Layanan kosong!!!
                </td>
            </tr>
        </table>
    </AuthenticatedLayout>
</template>
