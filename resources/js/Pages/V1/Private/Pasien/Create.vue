<script setup>
    import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
    import PublicInputText from '@/Components/V1/Form/PublicInputText.vue';
    import InputError from '@/Components/InputError.vue';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/inertia-vue3';
    import PrimaryButton from '@/Components/V1/Button/PrimaryButton.vue';

    const form = useForm({
        name: '',
        username: '',
        nik: '',
        bpjs: '',
        no_hp: '',
        jenis_kelamin: '',
        tanggal_lahir: '',
        alamat: '',
    });
</script>
<template>
    <AuthenticatedLayout :href="route('admin.pasien.index')" text="Data Pasien">
        <form @submit.prevent="form.post(route('admin.pasien.store'), { onSuccess: () => form.reset() })">
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
                    <PublicInputText :label="'Nomor Induk Kewarganegaraan(KTP)'" :type="'number'"
                        :placeholder="'Ex : 65464661456464'" v-model="form.nik"></PublicInputText>
                    <InputError :message="form.errors.nik" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <PublicInputText :label="'Nomor BPJS'" :type="'number'" :placeholder="'Ex : 6546546546'"
                        v-model="form.bpjs"></PublicInputText>
                    <InputError :message="form.errors.bpjs" class="mt-2" />
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText :label="'Nomor Handphone'" :type="'number'"
                        :placeholder="'Ex : 085264884365'" v-model="form.no_hp">
                    </PublicInputText>
                    <InputError :message="form.errors.no_hp" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <div class="w-full px-3 md:w-1/1">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                            Jenis Kelamin
                        </label>
                        <select v-model="form.jenis_kelamin"
                            class="block w-full px-4 py-1 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white">
                            <option value="laki-laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <InputError :message="form.errors.jenis_kelamin" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText :label="'Tanggal lahir'" :type="'date'" :placeholder="'Ex : 1997/08/25'"
                        v-model="form.tanggal_lahir">
                    </PublicInputText>
                    <InputError :message="form.errors.tanggal_lahir" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <PublicInputText :label="'Alamat lengkap'" :type="'text'"
                        :placeholder="'Ex : Jl.letnan boyak, Langgini, Bangkinang kota, Kampar, Riau'"
                        v-model="form.alamat"></PublicInputText>
                    <InputError :message="form.errors.alamat" class="mt-2" />
                </div>
            </div>
            <div class="mt-6 text-center">
                <PrimaryButton :disabled="form.processing">Register</PrimaryButton>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
