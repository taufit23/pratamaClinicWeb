<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import PublicInputText from "@/Components/V1/Form/PublicInputText.vue";
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/V1/Button/PrimaryButton.vue";

const form = useForm({
    username: "",
    name: "",
});
</script>
<template>
    <AuthenticatedLayout
        :href="route('admin.admins.index')"
        text="Data admins / Tambah"
    >
        <form
            @submit.prevent="
                form.post(route('admin.admins.store'), {
                    onSuccess: () => form.reset(),
                })
            "
        >
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText
                        :label="'Nama Lengkap'"
                        :type="'text'"
                        :placeholder="'Ex : Alzikri'"
                        v-model="form.name"
                    ></PublicInputText>
                    <InputError :message="form.errors.name" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <PublicInputText
                        :label="'Username'"
                        :type="'text'"
                        :placeholder="'Ex : alzikri007'"
                        v-model="form.username"
                    >
                    </PublicInputText>
                    <InputError :message="form.errors.username" class="mt-2" />
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
