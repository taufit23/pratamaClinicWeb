<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";

const props = defineProps({
    user: Object,
    rekam_medis: Object,
    pasien: Object,
});

const form = useForm({
    cari: "",
});
</script>
<template>
    <AuthenticatedLayout
        :href="route('dokter.pasien.index')"
        :text="
            'Data Pasien / Username : ' +
            user.username +
            ', Rekam Medis Id : ' +
            rekam_medis.id
        "
    >
        <section class="text-gray-600 body-font">
            <div class="container mx-auto">
                <div
                    class="flex flex-wrap w-full flex-col items-center text-center"
                >
                    <h1
                        class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"
                    >
                        Rekam Medis
                        <span class="text-yellow-600">{{ pasien.name }}</span>
                    </h1>
                    <p>
                        Tanggal Berkunjung :
                        {{ rekam_medis.tanggal_periksa }}
                    </p>
                </div>
                <div class="flex flex-wrap">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg bg-white">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4"
                            >
                                <CIcon :icon="icon.cilNotes" />
                            </div>
                            <h2
                                class="text-lg text-gray-900 font-medium title-font mb-2"
                            >
                                Keluhan : 
                            </h2>
                            <li
                                class="leading-relaxed text-base"
                                v-for="keluhan in rekam_medis.keluhan"
                                :key="keluhan"
                            >
                                {{ keluhan }}
                            </li>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg bg-white">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4"
                            >
                                <CIcon :icon="icon.cilVector" />
                            </div>
                            <h2
                                class="text-lg text-gray-900 font-medium title-font mb-2"
                            >
                            Diagnosa : 
                            </h2>
                            <li
                                class="leading-relaxed text-base"
                                v-for="diagnosa in rekam_medis.diagnosa"
                                :key="diagnosa"
                            >
                                {{ diagnosa }}
                            </li>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg bg-white">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4"
                            >
                            <CIcon :icon="icon.cilMoodVeryBad" />
                        </div>
                        <h2
                            class="text-lg text-gray-900 font-medium title-font mb-2"
                        >
                        Penyakit : 
                        </h2>
                        <li
                            class="leading-relaxed text-base"
                            v-for="jenis_penyakit in rekam_medis.jenis_penyakit"
                            :key="jenis_penyakit"
                        >
                            {{ jenis_penyakit }}
                        </li>
                    </div>
                    </div>
                    <SuccessButton :href="route('dokter.pasien.show', user.id)" class="flex mx-auto mt-1 text-white bg-indigo-500 border-0 py-3  focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        Kembali
                    </SuccessButton>
                    <SuccessButton :href="route('dokter.pasien.editRekamMedis',[user.id, rekam_medis.id])" v-if="rekam_medis.dokter == null" class="flex mx-auto mt-1 text-white bg-indigo-500 border-0 py-3 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        Layani
                    </SuccessButton>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
