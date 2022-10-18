<script setup>
    import GuestLayout from '@/Layouts/V1/GuestLayout.vue';
    import AuthBackground from '@/Components/V1/Background/AuthBackground.vue';
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
        password: '',
        password_confirmation: ''
    });
</script>
<template>
    <GuestLayout>
        <AuthBackground />
        <div class="antialiased text-gray-800">
            <div class="container h-full px-4 mx-auto">
                <div class="flex items-center content-center justify-center h-full">
                    <div class="w-full px-4 mt-16 lg:w-12/12 ">
                        <div
                            class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-300 border-0 rounded-lg shadow-lg">
                            <div class="px-2 py-2 mb-0 rounded-t">
                                <div class="text-3xl font-bold text-center text-gray-500">
                                    <strong>Regstrasi Form</strong>
                                </div>
                                <hr class="mt-2 border-gray-400  border-b-1" />
                            </div>
                            <div class="flex-auto px-4 py-10 pt-0 lg:px-10">
                                <form
                                    @submit.prevent="form.post(route('register.store'), { onSuccess: () => form.reset() })">
                                    <div class="flex flex-wrap mb-3 -mx-3">
                                        <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                            <PublicInputText :label="'Nama Lengkap'" :type="'text'"
                                                :placeholder="'Ex : Alzikri'" v-model="form.name"></PublicInputText>
                                            <InputError :message="form.errors.name" class="mt-2" />
                                        </div>
                                        <div class="w-full px-3 md:w-1/2">
                                            <PublicInputText :label="'Username'" :type="'text'"
                                                :placeholder="'Ex : alzikri007'" v-model="form.username">
                                            </PublicInputText>
                                            <InputError :message="form.errors.username" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mb-3 -mx-3">
                                        <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                            <PublicInputText :label="'Nomor Induk Kewarganegaraan(KTP)'"
                                                :type="'number'" :placeholder="'Ex : 65464661456464'"
                                                v-model="form.nik"></PublicInputText>
                                            <InputError :message="form.errors.nik" class="mt-2" />
                                        </div>
                                        <div class="w-full px-3 md:w-1/2">
                                            <PublicInputText :label="'Nomor BPJS'" :type="'number'"
                                                :placeholder="'Ex : 6546546546'" v-model="form.bpjs"></PublicInputText>
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
                                                <label
                                                    class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
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
                                            <PublicInputText :label="'Tanggal lahir'" :type="'date'"
                                                :placeholder="'Ex : 1997/08/25'" v-model="form.tanggal_lahir">
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
                                    <div class="flex flex-wrap mb-3 -mx-3">
                                        <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                            <PublicInputText :label="'Password'" :type="'password'"
                                                :placeholder="'Ex : *********'" v-model="form.password">
                                            </PublicInputText>
                                            <InputError :message="form.errors.password" class="mt-2" />
                                        </div>
                                        <div class="w-full px-3 md:w-1/2">
                                            <PublicInputText :label="'Konfirmasi password'" :type="'password'"
                                                :placeholder="'Ex : *********'" v-model="form.password_confirmation">
                                            </PublicInputText>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-center">
                                        <PrimaryButton :disabled="form.processing">Register</PrimaryButton>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="flex flex-wrap mt-6">
                            <div class="w-1/2">
                                <a href="#pablo" class="text-gray-300"><small>Forgot password?</small></a>
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="#pablo" class="text-gray-300"><small>Create new account</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </GuestLayout>

</template>