<script setup>
    import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
    import SuccessButton from '@/Components/V1/Button/SuccessButton.vue';

    const props = defineProps({
        dokters: Object
    })
</script>
<template>
    <AuthenticatedLayout :href="route('admin.dokter.index')" text="Data Dokter">
        <SuccessButton :href="route('admin.dokter.create')" class="mx-2">Tambah</SuccessButton>
        <table class="w-full whitespace-nowrap">
            <tr class="font-bold text-left">
                <th class="px-6 pt-6 pb-4">Username</th>
                <th class="px-6 pt-6 pb-4">Nama lengkap</th>
                <th class="px-6 pt-6 pb-4">Alamat</th>
                <th class="px-6 pt-6 pb-4">bidang</th>
                <th class="px-6 pt-6 pb-4">Aksi</th>
            </tr>
            <tr class="hover:bg-gray-100 focus-within:bg-gray-100" v-for="dokter in dokters" :key="dokter.id">
                <td class="px-6 pt-6 pb-4">sad</td>
                <td class="px-6 pt-6 pb-4">sad</td>
                <td class="px-6 pt-6 pb-4">sad</td>
                <td class="px-6 pt-6 pb-4">sad</td>
            </tr>
            <tr>
                <td class="px-6 py-4 border-t" colspan="5">No contacts found.</td>
            </tr>
        </table>
    </AuthenticatedLayout>
</template>
