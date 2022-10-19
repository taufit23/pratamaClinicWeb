<script setup>
    import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
    import SuccessButton from '@/Components/V1/Button/SuccessButton.vue';
    import PublicInputText from '@/Components/V1/Form/PublicInputText.vue';
    import InputError from '@/Components/InputError.vue';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/inertia-vue3';
    import PrimaryButton from '@/Components/V1/Button/PrimaryButton.vue';

    const props = defineProps({
        user: Object,
        dokter: Object,
    });
    const form = useForm({
        username: props.user.username,
        name: props.dokter.name,
        nip: props.dokter.nip,
        bidang: props.dokter.bidang,
        alamat: props.dokter.alamat
    });
</script>
<template>
    <AuthenticatedLayout :href="route('admin.dokter.index')" text="Data Dokter / Edit">
        <form @submit.prevent="form.put(route('admin.dokter.update', user.id), { onSuccess: () => form.reset() })">
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText :label="'Nama Lengkap'" :type="'text'" :placeholder="'Ex : Alzikri'"
                        v-model="form.name"></PublicInputText>
                    <InputError :message="form.errors.name" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <PublicInputText :label="'Username'" :type="'text'" :placeholder="'Ex : alzikri007'"
                        v-model="form.username">
                    </PublicInputText>
                    <InputError :message="form.errors.username" class="mt-2" />
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText :label="'Nomor Identitas Pegawai (NIP)'" :type="'number'"
                        :placeholder="'Ex : 1958081819840410012'" v-model="form.nip"></PublicInputText>
                    <InputError :message="form.errors.nip" class="mt-2" />
                </div>

                <div class="w-full px-3 md:w-1/2">
                    <div class="w-full px-3 md:w-1/1">
                        <label
                            class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                            Posisi
                        </label>
                        <select v-model="form.bidang"
                            class="block w-full px-4 py-1 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white">
                            <option value="umum">Poli umum</option>
                            <option value="gigi">Poli Gigi</option>
                            <option value="kebidanan & kandungan">Poli Kebidanan & Kandungan</option>
                        </select>
                        <InputError :message="form.errors.bidang" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-full md:mb-0">
                    <PublicInputText :label="'alamat'" :type="'text'"
                        :placeholder="'Ex : Jl.letnan boyak, Langgini, Bangkinang kota, Kampar, Riau'"
                        v-model="form.alamat">
                    </PublicInputText>
                    <InputError :message="form.errors.alamat" class="mt-2" />
                </div>
            </div>
            <div class="mt-6 text-center">
                <PrimaryButton :disabled="form.processing">Update</PrimaryButton>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
