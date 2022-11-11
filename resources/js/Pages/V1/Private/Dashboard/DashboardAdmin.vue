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
    users_dokter_gigi: Object,
    users_dokter_umum: Object,
    users_dokter_kandungan: Object,

    users_pasien: Object,
    rekam_medis_all: Object,
    pembayaran_lunas: Object,
    pembayaran_belum_lunas: Object,
});

let totalHarga = 0;

for (let i = 0; i < props.pembayaran_lunas.length; i++) {
    const a = props.pembayaran_lunas[i];
    totalHarga += a.total_bayar;
}
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
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
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
            <CardStats :head="'Dokter gigi'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="users_dokter_gigi != null"
                        >
                            {{ users_dokter_gigi.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Dokter poli umum'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="users_dokter_umum != null"
                        >
                            {{ users_dokter_umum.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Dokter poli kandungan & kebidanan'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="users_dokter_kandungan != null"
                        >
                            {{ users_dokter_kandungan.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Pasien'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
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
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
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
            <CardStats :head="'Pembayaran belum lunas'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="pembayaran_belum_lunas != null"
                        >
                            {{ pembayaran_belum_lunas.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Pembayaran lunas'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="pembayaran_lunas != null"
                        >
                            {{ pembayaran_lunas.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Keuangan'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilMedicalCross" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="pembayaran_lunas != null"
                        >
                            Rp. {{ totalHarga }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
        </div>
    </AuthenticatedLayout>
</template>
