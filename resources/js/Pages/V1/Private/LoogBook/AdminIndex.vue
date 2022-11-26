<script setup>
import AuthenticatedLayout from "@/Layouts/V1/AuthenticatedLayout.vue";
import PrivateLine from "@/Components/V1/Chart/PrivateLine.vue";
import PrivateBar from "@/Components/V1/Chart/PrivateBar.vue";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
import CardStats from "@/Components/V1/Card/CardStats.vue";
import IconBall from "@/Components/V1/Card/IconBall.vue";
import CounterP from "@/Components/V1/Card/CounterP.vue";
const props = defineProps({
    data: Object,
});

console.log(props.data);
</script>
<template>
    <AuthenticatedLayout :href="route('dashboard.index')" text="Dashboard">
        <h1 class="header-text">
            Data keuangan satu(1) tahun lalu hingga sekarang
        </h1>
        <div class="flex flex-wrap my-1">
            <CardStats
                :head="da.month + ' ' + da.year"
                v-for="da in data"
                :key="da.id"
            >
                <template #icon>
                    Total cash
                    <br />
                    Rp. {{ da.cash }}
                    <IconBall>
                        <CIcon :icon="icon.cilCalendarCheck" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span class="h-1 whitespace-nowrap" v-if="da.data != 0">
                            {{ da.data.length }} x Kunjungan dibayar
                        </span>
                        <span v-else class="h-1 whitespace-nowrap"
                            >0 kunjungan</span
                        >
                    </CounterP>
                </template>
            </CardStats>
        </div>
    </AuthenticatedLayout>
</template>
