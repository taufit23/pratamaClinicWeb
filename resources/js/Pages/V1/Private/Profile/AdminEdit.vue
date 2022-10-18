<script setup>
    import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
    import PublicInputText from '@/Components/V1/Form/PublicInputText.vue';
    import InputError from '@/Components/InputError.vue';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/inertia-vue3';
    import PrimaryButton from '@/Components/V1/Button/PrimaryButton.vue';

    const props = defineProps({
        admin: Object
    })
    const form = useForm({
        name: props.admin.name,
    });
</script>
<template>
    <AuthenticatedLayout :href="route('profile.index')" text="Profile">
        <form @submit.prevent="form.put(route('admin.profile.update'), { onSuccess: () => form.reset() })">
            <div class="flex flex-wrap mb-3 -mx-3">
                <div class="w-full px-3 mb-6 md:w-full md:mb-0">
                    <PublicInputText :label="'Nama Lengkap'" :type="'text'" :placeholder="'Ex : Alzikri'"
                        v-model="form.name"></PublicInputText>
                    <InputError :message="form.errors.name" class="mt-2" />
                </div>
            </div>
            <div class="mt-6 text-center">
                <PrimaryButton :disabled="form.processing">Update</PrimaryButton>
            </div>
        </form>

    </AuthenticatedLayout>
</template>
