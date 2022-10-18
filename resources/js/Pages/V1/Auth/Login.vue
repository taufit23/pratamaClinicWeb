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
        <div class="container h-full px-4 mx-auto">
            <div class="flex items-center content-center justify-center h-full">
                <div class="w-full px-4 mt-16 lg:w-4/12 ">
                    <div
                        class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-300 border-0 rounded-lg shadow-lg">
                        <div class="px-2 py-2 mb-0 rounded-t">
                            <div class="text-3xl font-bold text-center text-gray-500">
                                <strong>Login Form</strong>
                            </div>
                            <hr class="mt-2 border-gray-400  border-b-1" />
                        </div>
                        <div class="flex-auto px-4 py-10 pt-0 lg:px-10">
                            <form @submit.prevent="form.post(route('login.store'), { onSuccess: () => form.reset() })">
                                <div class="flex flex-wrap mb-6 -mx-3">
                                    <div class="w-full px-3 mb-6 md:w-1/1 md:mb-0">
                                        <PublicInputText :label="'Username'" :type="'text'"
                                            :placeholder="'Ex : Alzikri007'" v-model="form.username"></PublicInputText>
                                            <InputError :message="form.errors.username" class="mt-1" />
                                    </div>
                                </div>
                                <div class="flex flex-wrap mb-6 -mx-3">
                                    <div class="w-full px-3 mb-6 md:w-1/1 md:mb-0">
                                        <PublicInputText :label="'Password'" :type="'password'"
                                            :placeholder="'Ex : **********'" v-model="form.password"></PublicInputText>
                                            <InputError :message="form.errors.password" class="mt-1" />
                                    </div>
                                </div>
                                <div class="mt-6 text-center">
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