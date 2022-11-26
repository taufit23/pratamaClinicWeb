<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import PublicInputText from "@/Components/V1/Form/PublicInputText.vue";
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/V1/Button/PrimaryButton.vue";

const form = useForm({
    nama_obat: "",
    harga_obat: "",
    stok_obat: "",
});
</script>
<template>
    <AuthenticatedLayout :href="route('admin.obat.index')" :text="'Data Obat'">
        <form
            @submit.prevent="
                form.post(route('admin.obat.store'), {
                    onSuccess: () => form.reset(),
                })
            "
        >
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText
                        :label="'Nama obat'"
                        :type="'text'"
                        :placeholder="'Ex : Paracetamol '"
                        v-model="form.nama_obat"
                        autofocus
                    >
                    </PublicInputText>
                    <InputError :message="form.errors.nama_obat" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <PublicInputText
                        :label="'Harga obat'"
                        :type="'number'"
                        :placeholder="'Ex : 3500'"
                        v-model="form.harga_obat"
                    >
                    </PublicInputText>
                    <InputError
                        :message="form.errors.harga_obat"
                        class="mt-2"
                    />
                </div>
            </div>
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText
                        :label="'Stok obat'"
                        :type="'number'"
                        :placeholder="'Ex : Paracetamol '"
                        v-model="form.stok_obat"
                        autofocus
                    >
                    </PublicInputText>
                    <InputError :message="form.errors.stok_obat" class="mt-2" />
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
