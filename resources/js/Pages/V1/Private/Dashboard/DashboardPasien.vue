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
    my_rekam_medis: Object,
    dokter_umum: Object,
    dokter_gigi: Object,
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
            <CardStats :head="'Dokter poli umum'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilUserX" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="dokter_umum != null"
                        >
                            {{ dokter_umum.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Dokt gigi'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilUserX" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="dokter_gigi != null"
                        >
                            {{ dokter_gigi.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
            <CardStats :head="'Dokt poli kandungan & kebidanan'">
                <template #icon>
                    <IconBall>
                        <CIcon :icon="icon.cilUserX" size="xxl" />
                    </IconBall>
                </template>
                <template #counter>
                    <CounterP>
                        <span
                            class="h-1 whitespace-nowrap"
                            v-if="dokter_kandungan != null"
                        >
                            {{ dokter_kandungan.length }}
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
                            v-if="my_rekam_medis != null"
                        >
                            {{ my_rekam_medis.length }}
                        </span>
                        <span v-else class="h-1 whitespace-nowrap">0</span>
                    </CounterP>
                </template>
            </CardStats>
        </div>

        <!-- about klinik -->
        <div class="p-4 md:w-1/1">
            <div
                class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60"
            >
                <div class="p-6">
                    <h1
                        class="mb-1 text-lg font-medium text-gray-900 title-font"
                    >
                        Klinik pratama
                    </h1>
                    <p class="mb-1 leading-relaxed">
                        KESEMBUHAN PASIEN ADALAH KEBAHAGIAAN KAMI
                    </p>
                    <div class="flex flex-wrap items-center">
                        <div class="p-2 md:w-1/2">
                            <div class="p-6">
                                <h1
                                    class="mb-1 text-lg font-medium text-gray-900 title-font"
                                >
                                    Visi
                                </h1>
                                <ul>
                                    <li>
                                        MENJADI KLINIK PILIHAN UTAMA MASYARAKAT
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-2 md:w-1/2">
                            <div class="p-6">
                                <h1
                                    class="mb-1 text-lg font-medium text-gray-900 title-font"
                                >
                                    Misi
                                </h1>
                                <ul class="list-none">
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full"
                                                >
                                                    <CIcon
                                                        :icon="
                                                            icon.cilCaretRight
                                                        "
                                                        size="sm"
                                                        class="w-4 h-4"
                                                    />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Memberikan pelayanan
                                                    prefentif, kuratif dan
                                                    rehabilitative yang
                                                    komprehensif dan
                                                    berkesinambungan
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full"
                                                >
                                                    <CIcon
                                                        :icon="
                                                            icon.cilCaretRight
                                                        "
                                                        size="sm"
                                                        class="w-4 h-4"
                                                    />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Memberikan pelayanan
                                                    kesehatan bermutu dan
                                                    mengutamakan kepuasan pasien
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full"
                                                >
                                                    <CIcon
                                                        :icon="
                                                            icon.cilCaretRight
                                                        "
                                                        size="sm"
                                                        class="w-4 h-4"
                                                    />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Menyediakan sarana dan
                                                    prasarana bermutu baik &
                                                    terpercaya
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full"
                                                >
                                                    <CIcon
                                                        :icon="
                                                            icon.cilCaretRight
                                                        "
                                                        size="sm"
                                                        class="w-4 h-4"
                                                    />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Menyediakan SDM yang
                                                    professional, kreatif,
                                                    santun dan berakhlak mulia
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full"
                                                >
                                                    <CIcon
                                                        :icon="
                                                            icon.cilCaretRight
                                                        "
                                                        size="sm"
                                                        class="w-4 h-4"
                                                    />
                                                </span>
                                            </div>
                                            <div>
                                                <h4 class="text-yellow-500">
                                                    Membantu menyukseskan
                                                    program pemerintah yaitu
                                                    Jaminan Kesehatan Nasional
                                                    (JKN).
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
