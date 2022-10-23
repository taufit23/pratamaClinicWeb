<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import SuccessButton from "@/Components/V1/Button/SuccessButton.vue";
import PublicInputText from "@/Components/V1/Form/PublicInputText.vue";
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/V1/Button/PrimaryButton.vue";

const props = defineProps({
    user: Object,
});

const form = useForm({
    password: "",
    password_confirmation: "",
});
</script>
<template>
    <AuthenticatedLayout :href="route('admin.admins.index')" text="Data admins">
        <form
            @submit.prevent="
                form.put(route('admin.admins.storeLupaPassword', user.id), {
                    onSuccess: () => form.reset(),
                })
            "
        >
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText
                        :label="'Password BAru'"
                        :type="'password'"
                        :placeholder="'Ex : *********'"
                        v-model="form.password"
                    >
                    </PublicInputText>
                    <InputError :message="form.errors.password" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <PublicInputText
                        :label="'Konfirmasi password'"
                        :type="'password'"
                        :placeholder="'Ex : *********'"
                        v-model="form.password_confirmation"
                    >
                    </PublicInputText>
                </div>
            </div>
            <div class="mt-6 text-center">
                <PrimaryButton :disabled="form.processing"
                    >Update</PrimaryButton
                >
            </div>
        </form>
    </AuthenticatedLayout>
</template>
