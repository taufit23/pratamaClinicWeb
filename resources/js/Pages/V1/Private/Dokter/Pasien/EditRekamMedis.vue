<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import PublicInputText from "@/Components/V1/Form/PublicInputText.vue";
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/V1/Button/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Multiselect from "@vueform/multiselect";
import { Inertia } from "@inertiajs/inertia";
const props = defineProps({
    user: Object,
    pasien: Object,
    rekam_medis: Object,
    layanans: Object,
});
const form = useForm({
    name: props.pasien.name,
    username: props.user.username,
    tanggal_periksa: props.rekam_medis.tanggal_periksa,
    keluhans: props.rekam_medis.keluhan,
    diagnosas: props.rekam_medis.diagnosa,
    jenis_penyakit: props.rekam_medis.kenis_penyakit,
    layanans: props.rekam_medis.layanan,
});
const layanan = props.layanans.map((item) =>
{
    return {
        value: item.id,
        label: item.nama_layanan,
    };
});
</script>
<template>
    <AuthenticatedLayout :href="route('admin.pasien.index')"
                         text="Data Pasien">
        <form @submit.prevent="
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
                    <InputLabel for="name"
                                value="Nama lengkap" />
                    <TextInput id="name"
                               type="name"
                               class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                               v-model="form.name"
                               readonly />
                    <InputError class="mt-2"
                                :message="form.errors.name" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <InputLabel for="username"
                                value="Username" />
                    <TextInput id="username"
                               type="text"
                               class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                               v-model="form.username"
                               readonly />
                    <InputError class="mt-2"
                                :message="form.errors.username" />
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <InputLabel for="tanggal_periksa"
                                value="Tanggal periksa" />
                    <TextInput id="tanggal_periksa"
                               type="date"
                               class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                               v-model="form.tanggal_periksa"
                               readonly />
                    <InputError class="mt-2"
                                :message="form.errors.tanggal_periksa" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <InputLabel for="keluhan"
                                value="Keluhan" />
                    <Multiselect id="keluhan"
                                 v-model="form.keluhans"
                                 mode="tags"
                                 :close-on-select="false"
                                 :searchable="true"
                                 :create-option="true"
                                 :options="form.keluhans" />
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <InputLabel for="diagnosas"
                                value="Diagnosa keluhan" />

                    <Multiselect placeholder="Ketik detail diagnosa & hit enter"
                                 id="diagnosas"
                                 v-model="form.diagnosas"
                                 mode="tags"
                                 :close-on-select="false"
                                 :searchable="true"
                                 :create-option="true"
                                 :options="form.diagnosas" />
                    <InputError class="mt-2"
                                :message="form.errors.diagnosas" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <InputLabel for="jenis_penyakit"
                                value="Penyakit" />
                    <Multiselect placeholder="Ketik nama penyakit & hit enter"
                                 id="jenis_penyakit"
                                 v-model="form.jenis_penyakit"
                                 mode="tags"
                                 :close-on-select="false"
                                 :searchable="true"
                                 :create-option="true"
                                 :options="form.jenis_penyakit" />
                    <InputError class="mt-2"
                                :message="form.errors.jenis_penyakit" />
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/1 md:mb-0">
                    <InputLabel for="layanans"
                                value="Kegiatan pelayanan" />
                    <div>
                        <Multiselect placeholder="cari nama layanan & hit enter"
                                     id="layanans"
                                     v-model="form.layanans"
                                     mode="tags"
                                     :close-on-select="true"
                                     :searchable="true"
                                     :create-option="false"
                                     :options="layanan" />
                    </div>
                    <InputError class="mt-2"
                                :message="form.errors.layanans" />
                </div>
            </div>
            <div class="mt-6 text-center">
                <PrimaryButton :disabled="form.processing">Update</PrimaryButton>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
<style src="@vueform/multiselect/themes/default.css">

</style>
