<script setup>
    import AuthenticatedLayout from '@/Layouts/V1/AuthenticatedLayout.vue';
    
    const props = defineProps(['role']);
</script>
<template>

    <AuthenticatedLayout :role="role">
    </AuthenticatedLayout>
</template>