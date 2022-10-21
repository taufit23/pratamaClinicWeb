<script setup>
    import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
    import PublicInputText from '@/Components/V1/Form/PublicInputText.vue';
    import InputError from '@/Components/InputError.vue';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/inertia-vue3';
    import PrimaryButton from '@/Components/V1/Button/PrimaryButton.vue';

    const form = useForm({
        nama_layanan: '',
        harga_layanan: '',
    });
</script>
<template>
    <AuthenticatedLayout :href="route('admin.layanan.index')" :text="'Data Layanan'">
        <form @submit.prevent="form.post(route('admin.layanan.store'), { onSuccess: () => form.reset() })">
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <PublicInputText :label="'Nama layanan'" :type="'text'"
                        :placeholder="'Ex : Pasang Infus Dewasa '" v-model="form.nama_layanan">
                    </PublicInputText>
                    <InputError :message="form.errors.nama_layanan" class="mt-2" />
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <PublicInputText :label="'Harga layanan'" :type="'number'" :placeholder="'Ex : 35000'"
                        v-model="form.harga_layanan">
                    </PublicInputText>
                    <InputError :message="form.errors.harga_layanan" class="mt-2" />
                </div>
            </div>
            <div class="mt-6 text-center">
                <PrimaryButton :disabled="form.processing">Tambah</PrimaryButton>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
