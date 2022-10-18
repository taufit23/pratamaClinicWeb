<script setup>
    import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
    import H1Name from './Component/H1Name.vue';
    import {
        CIcon
    } from '@coreui/icons-vue';
    import * as icon from '@coreui/icons';
    import SuccessButton from '@/Components/V1/Button/SuccessButton.vue';
</script>
<template>
    <AuthenticatedLayout :href="route('profile.index')" text="Profile">
        <!--Main Col-->
        <div id="profile"
            class="items-center w-full mx-6 bg-white rounded-lg shadow-2xl opacity-75 lg:w-full lg:rounded-t-lg lg:rounded-b-lg lg:mx-0">
            <div class="items-center w-full p-4 md:p-12 lg:text-left">
                <div v-if="$page.props.auth.user.role == 'pasien'"
                    class="grid w-auto h-auto grid-flow-row grid-rows-1 gap-2 overflow-hidden text-center sm auto-cols-auto gap-y-0">
                    <H1Name>
                        {{ $page . props . auth . user . pasien . name }}
                    </H1Name>
                    <div class="pt-3 mx-auto border-b-2 border-red-500 opacity-50 w-5/5 lg:mx-0"></div>
                    <div class="px-28">
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilUserX" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Username :
                            {{ $page . props . auth . user . username }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilLocationPin" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Alamat :
                            {{ $page . props . auth . user . pasien . alamat }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cifId" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Nomor KTP:
                            {{ $page . props . auth . user . pasien . ktp }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start"
                            v-if="$page . props . auth . user . pasien . bpjs != null">
                            <CIcon :icon="icon.cilCreditCard" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Nomor BPJS:
                            {{ $page . props . auth . user . pasien . bpjs }}
                        </p>
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilPhone" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Nomor Handphone:
                            {{ $page . props . auth . user . pasien . no_hp }}
                        </p>
                    </div>

                    <div class="mt-2">
                        <SuccessButton :href="route('profile.edit')" class="mx-2">Edit</SuccessButton>
                        <SuccessButton :href="route('profile.ubah_password')" class="mx-2">Ubah Password
                        </SuccessButton>
                    </div>
                </div>
                <div v-if="$page.props.auth.user.role == 'admin'"
                    class="grid w-auto h-auto grid-flow-row grid-rows-1 gap-2 overflow-hidden text-center sm auto-cols-auto gap-y-0">
                    <H1Name>
                        {{ $page . props . auth . user . admin . name }}
                    </H1Name>
                    <div class="pt-3 mx-auto border-b-2 border-red-500 opacity-50 w-5/5 lg:mx-0"></div>

                    <div class="px-28">
                        <p class="flex items-center justify-center pt-4 text-base font-bold lg:justify-start">
                            <CIcon :icon="icon.cilUserX" size="sm"
                                class="inline-flex items-center justify-center w-5 h-5 mx-2 text-center text-blue-gray-800" />
                            Username :
                            {{ $page . props . auth . user . username }}
                        </p>
                    </div>
                    <div class="mt-2">
                        <SuccessButton :href="route('admin.profile.edit')" class="mx-2">Edit</SuccessButton>
                        <SuccessButton :href="route('profile.ubah_password')" class="mx-2">Ubah Password
                        </SuccessButton>
                    </div>
                </div>
            </div>

        </div>

    </AuthenticatedLayout>
</template>
