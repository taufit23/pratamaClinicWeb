<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import PublicInputText from "@/Components/V1/Form/PublicInputText.vue";
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/V1/Button/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Multiselect from "@vueform/multiselect";
const props = defineProps({
    user: Object,
    pasien: Object,
});
const form = useForm({
    name: props.pasien.name,
    username: props.user.username,
    tanggal_periksa: "",
    keluhans: [],
});
</script>
<template>
    <AuthenticatedLayout :href="route('admin.pasien.index')" text="Data Pasien">
        <form
            @submit.prevent="
                form.post(route('admin.pasien.storeMedicalRecord', user.id), {
                    onSuccess: () => form.reset(),
                })
            "
        >
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <InputLabel for="name" value="Nama lengkap" />
                    <TextInput
                        id="name"
                        type="name"
                        class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        v-model="form.name"
                        readonly
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <InputLabel for="username" value="Username" />
                    <TextInput
                        id="username"
                        type="text"
                        class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        v-model="form.username"
                        readonly
                    />
                    <InputError class="mt-2" :message="form.errors.username" />
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <InputLabel for="tanggal_periksa" value="Tanggal periksa" />
                    <TextInput
                        id="tanggal_periksa"
                        type="date"
                        class="block w-full px-4 py-1 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        v-model="form.tanggal_periksa"
                        required
                    />
                    <InputError
                        class="mt-2"
                        :message="form.errors.tanggal_periksa"
                    />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <InputLabel for="keluhan" value="Keluhan" />
                    <Multiselect
                        id="keluhan"
                        v-model="form.keluhans"
                        mode="tags"
                        :close-on-select="false"
                        :searchable="true"
                        :create-option="true"
                        :options="form.keluhans"
                    />
                    <InputError class="mt-2" :message="form.errors.keluhans" />
                </div>
            </div>
            <div class="mt-6 text-center">
                <PrimaryButton :disabled="form.processing"
                    >Tambah</PrimaryButton
                >
            </div>
        </form>
    </AuthenticatedLayout>
</template>
<style src="@vueform/multiselect/themes/default.css"></style>
