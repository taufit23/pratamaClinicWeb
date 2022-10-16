<script setup>
    import GuestLayout from '@/Layouts/V1/GuestLayout.vue';
    import AuthBackground from '@/Components/V1/Background/AuthBackground.vue';
    import PublicInputText from '@/Components/V1/Form/PublicInputText.vue';
    import InputError from '@/Components/InputError.vue';
    import {
        Head,
        Link,
        useForm
    } from '@inertiajs/inertia-vue3';
    import PrimaryButton from '@/Components/V1/Button/PrimaryButton.vue';

    const form = useForm({
        username: '',
        password: ''
    });
</script>
<template>
    <GuestLayout>
        <AuthBackground />
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4 mt-16 ">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                        <div class="rounded-t mb-0 px-2 py-2">
                            <div class="text-gray-500 text-center font-bold text-3xl">
                                <strong>Login Form</strong>
                            </div>
                            <hr class=" mt-2 border-b-1 border-gray-400" />
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form @submit.prevent="form.post(route('login.store'), { onSuccess: () => form.reset() })">
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                                        <PublicInputText :label="'Username'" :type="'text'"
                                            :placeholder="'Ex : Alzikri007'" v-model="form.username"></PublicInputText>
                                            <InputError :message="form.errors.username" class="mt-1" />
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                                        <PublicInputText :label="'Password'" :type="'password'"
                                            :placeholder="'Ex : **********'" v-model="form.password"></PublicInputText>
                                            <InputError :message="form.errors.password" class="mt-1" />
                                    </div>
                                </div>
                                <div class="text-center mt-6">
                                    <PrimaryButton>Login</PrimaryButton>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-6">
                        <div class="w-1/2">
                            <a href="#pablo" class="text-gray-300"><small>Forgot password?</small></a>
                        </div>
                        <div class="w-1/2 text-right">
                            <a href="#pablo" class="text-gray-300"><small>Create new account</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>

</template>