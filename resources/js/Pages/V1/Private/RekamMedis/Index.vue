<script setup>
import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
</script>

<template>
    <AuthenticatedLayout :href="route('rekam_medis.index')" text="Rekam Medis"></AuthenticatedLayout>
</template>