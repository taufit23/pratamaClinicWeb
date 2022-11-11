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
    users_admin: Object,
    users_dokter: Object,
    users_pasien: Object,
    rekam_medis_all: Object,
    my_rekam_medis: Object,
});
</script>
<template>
    <AuthenticatedLayout :href="route('dashboard.index')" text="Dashboard">
        <div class="flex flex-wrap my-1">
            <CardStats :head="'Aktor admin'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilUserX" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="users_admin != null"
                        >
                            {{ users_admin.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Aktor dokter'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilUserX" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="users_dokter != null"
                        >
                            {{ users_dokter.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Aktor pasien'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilUserX" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="users_pasien != null"
                        >
                            {{ users_pasien.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Rekam medis'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilUserX" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="rekam_medis_all != null"
                        >
                            {{ rekam_medis_all.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Rekam medis ditanggulangi'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilUserX" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="my_rekam_medis != null"
                        >
                            {{ my_rekam_medis.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
        </div>
    </AuthenticatedLayout>
</template>
