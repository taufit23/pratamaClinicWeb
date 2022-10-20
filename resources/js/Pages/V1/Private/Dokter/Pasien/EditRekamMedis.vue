<script setup>
    import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
    import PublicInputText from "@/Components/V1/Form/PublicInputText.vue";
    import InputError from "@/Components/InputError.vue";
    import {
        Head,
        Link,
        useForm
    } from "@inertiajs/inertia-vue3";
    import PrimaryButton from "@/Components/V1/Button/PrimaryButton.vue";

    const props = defineProps({
        user: Object,
        pasien: Object,
        rekam_medis: Object,
    });
    const form = useForm({
        name: props.pasien.name,
        username: props.user.username,
        tanggal_periksa: props.rekam_medis.tanggal_periksa,
        keluhan: "",
        keluhans: props.rekam_medis.keluhan,
        diagnosa: "",
        diagnosas: [],
        penyakit: '',
        jenis_penyakit: [],
        layanan: '',
        layanans: []
    });
    const addKeluhans = function() {
        form.keluhans.push(form.keluhan);
        form.keluhan = null;
    };
    const addDiagnosas = function() {
        form.diagnosas.push(form.diagnosa);
        form.diagnosa = null;
    };
    const addPenyakits = function() {
        form.jenis_penyakit.push(form.penyakit);
        form.penyakit = null;
    };
</script>
<template>
    <AuthenticatedLayout :href="route('dokter.pasien.index')"
        :text="'Data Pasien / Username : ' +
        user.username +
            ', Rekam Medis Id : ' +
            rekam_medis.id">
        <form
            @submit.prevent="
                form.put(
                    route('dokter.pasien.updateRekamMedis', [
                        user.id,
                        rekam_medis.id,
                    ]),
                    {
                        onSuccess: () => form.reset(),
                    }
                )
            ">
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                        Nama lengkap
                    </label>
                    <input type="text" v-model="form.name"
                        class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        readonly />
                    <InputError :message="form.errors.name" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                        Username
                    </label>
                    <input type="text" v-model="form.username"
                        class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        readonly />
                    <InputError :message="form.errors.username" class="mt-2" />
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                        Tanggal periksa
                    </label>

                    <input type="date" v-model="form.tanggal_periksa"
                        class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" />
                    <InputError :message="form.errors.tanggal_periksa" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                        Keluhan
                    </label>
                    <input type="text" v-model="form.keluhan" @keydown.tab="addKeluhans" v-on:focus="true"
                        class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" />
                    <p class="text-red-600">
                        Gunakan 'Tab' untuk menambahkan poin keluhan
                    </p>
                </div>
                <InputError :message="form.errors.keluhan" class="mt-2" />
            </div>
            <div class="px-2 pt-2 pb-11 mb-3 flex flex-wrap rounded-lg bg-purple-200 dark:bg-gray-400">
                <span
                    class="flex flex-wrap px-2 py-1 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100"
                    v-for="keluh in form.keluhans" :key="keluh">
                    {{ keluh }}
                </span>
            </div>
            <div class="mt-2 text-center">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                    Diagnosa
                </label>
                <input type="text" v-model="form.diagnosa" @keydown.tab="addDiagnosas" v-on:focus="true"
                    class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" />
                <p class="text-red-600">
                    Gunakan 'Tab' untuk menambahkan poin diagnosa
                </p>
                <div class="px-2 pt-2 pb-11 mb-3 flex flex-wrap rounded-lg bg-purple-200 dark:bg-gray-400">
                    <span
                        class="flex flex-wrap px-2 py-1 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100"
                        v-for="diag in form.diagnosas" :key="diag">
                        {{ diag }}
                    </span>
                </div>
            </div>
            <div class="mt-2 text-center">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                    Penyakit
                </label>
                <input type="text" v-model="form.penyakit" @keydown.tab="addPenyakits" v-on:focus="true"
                    class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" />
                <p class="text-red-600">
                    Gunakan 'Tab' untuk menambahkan poin penyakit
                </p>
                <div class="px-2 pt-2 pb-11 mb-3 flex flex-wrap rounded-lg bg-purple-200 dark:bg-gray-400">
                    <span
                        class="flex flex-wrap px-2 py-1 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100"
                        v-for="penya in form.jenis_penyakit" :key="penya">
                        {{ penya }}
                    </span>
                </div>
            </div>
            <div class="mt-2 text-center">
                <PrimaryButton :disabled="form.processing">Update</PrimaryButton>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
