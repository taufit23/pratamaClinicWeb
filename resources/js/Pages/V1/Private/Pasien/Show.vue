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
        pasien: Object
    });

    const form = useForm({
        cari: '',
    });
</script>
<template>
    <AuthenticatedLayout :href="route('admin.pasien.index')" :text="'Data Pasien / Username : ' + user.username">
        <div id="profile"
            class="items-center w-full mx-6 bg-white rounded-lg shadow-2xl opacity-75 lg:w-full lg:rounded-t-lg lg:rounded-b-lg lg:mx-0">
            <div class="items-center w-full p-4 md:p-12 lg:text-left">
                <div class="grid w-auto h-auto grid-flow-row grid-rows-1 gap-2 overflow-hidden text-center sm auto-cols-auto gap-y-0">
                    <H1Name>
                        {{ pasien.name }}
                    </H1Name>
                    <div class="pt-3 mx-auto border-b-2 border-red-500 opacity-50 w-5/5 lg:mx-0"></div>
                    <div class="px-28">
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
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start" >
                            <CIcon :icon="icon.cilPhone" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Password bawaan: <strong class="ml-2 text-red-600"> Klinikpratama</strong>
                        </p>
                    </div>

                    <div class="mt-2">
                        <SuccessButton class="mx-1" :href="route('admin.pasien.lupa_password', user.id)">Forgot
                            password</SuccessButton>
                    </div>
                </div>
            </div>

        </div>

    </AuthenticatedLayout>
</template>
