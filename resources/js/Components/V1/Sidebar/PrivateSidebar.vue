<script setup>
import PrivateDropdown from "../Notification/PrivateDropdown.vue";
import PrivateDropdownMenu from "../Navbar/PrivateDropdownMenu.vue";
import BrandLogo from "./BrandLogo.vue";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
import PrivateSideLink from "./PrivateSideLink.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
</script>
<template>
    <nav
        class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64"
    >
        <div
            class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap"
        >
            <!-- Brand -->
            <BrandLogo :href="route('dashboard.index')"
                >Klinik Pratama</BrandLogo
            >
            <!-- User -->
            <ul class="flex flex-wrap items-center list-none md:hidden">
                <li class="relative inline-block">
                    <PrivateDropdown></PrivateDropdown>
                </li>
                <li class="relative inline-block">
                    <PrivateDropdownMenu></PrivateDropdownMenu>
                </li>
            </ul>
            <div
                class="absolute top-0 left-0 right-0 z-40 items-center flex-1 h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-2 md:shadow-none"
            >
                <!-- Pasien link -->
                <ul
                    class="flex flex-col list-none md:flex-col md:min-w-full"
                    v-if="$page.props.auth.user.role == 'pasien'"
                >
                    <PrivateSideLink
                        :href="route('dashboard.index')"
                        :active="route().current('dashboard.index')"
                    >
                        <CIcon
                            :icon="icon.cilTv"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Dashboard {{ $page.props.auth.user.role }}
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('profile.index')"
                        :active="route().current('profile.index')"
                    >
                        <CIcon
                            :icon="icon.cilUser"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Profile
                        {{ $page.props.auth.user.role }}
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('rekam_medis.index')"
                        :active="route().current('rekam_medis.index')"
                    >
                        <CIcon
                            :icon="icon.cilMedicalCross"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Rekam Medis
                        {{ $page.props.auth.user.role }}
                    </PrivateSideLink>
                </ul>
                <!-- Dokter link -->
                <ul
                    class="flex flex-col list-none md:flex-col md:min-w-full"
                    v-if="$page.props.auth.user.role == 'dokter'"
                >
                    <PrivateSideLink
                        :href="route('dashboard.index')"
                        :active="route().current('dashboard.index')"
                    >
                        <CIcon
                            :icon="icon.cilTv"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Dashboard
                        {{ $page.props.auth.user.role }}
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('dokter.profile.index')"
                        :active="route().current('dokter.profile.index')"
                    >
                        <CIcon
                            :icon="icon.cilUser"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Profile
                        {{ $page.props.auth.user.role }}
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('dokter.pasien.index')"
                        :active="route().current('dokter.pasien.index')"
                    >
                        <CIcon
                            :icon="icon.cilAddressBook"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Data pasien
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('dokter.rekam_medis.index')"
                        :active="route().current('dokter.rekam_medis.index')"
                    >
                        <CIcon
                            :icon="icon.cilHealing"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Data rekam medis
                    </PrivateSideLink>
                </ul>
                <!-- Admin link -->
                <ul
                    class="flex flex-col list-none md:flex-col md:min-w-full"
                    v-if="$page.props.auth.user.role == 'admin'"
                >
                    <PrivateSideLink
                        :href="route('dashboard.index')"
                        :active="route().current('dashboard.index')"
                    >
                        <CIcon
                            :icon="icon.cilTv"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Dashboard
                        {{ $page.props.auth.user.role }}
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('admin.profile.index')"
                        :active="route().current('admin.profile.index')"
                    >
                        <CIcon
                            :icon="icon.cilUser"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Profile
                        {{ $page.props.auth.user.role }}
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('admin.dokter.index')"
                        :active="route().current('admin.dokter.index')"
                    >
                        <CIcon
                            :icon="icon.cilHospital"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Data Dokter
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('admin.pasien.index')"
                        :active="route().current('admin.pasien.index')"
                    >
                        <CIcon
                            :icon="icon.cilAddressBook"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Data Pasien
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('admin.layanan.index')"
                        :active="route().current('admin.layanan.index')"
                    >
                        <CIcon
                            :icon="icon.cilMedicalCross"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Data Layanan
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('admin.rekamMedis.index')"
                        :active="route().current('admin.rekamMedis.index')"
                    >
                        <CIcon
                            :icon="icon.cilWrapText"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Data rekam medis
                    </PrivateSideLink>
                    <PrivateSideLink
                        :href="route('admin.admins.index')"
                        :active="route().current('admin.admins.index')"
                    >
                        <CIcon
                            :icon="icon.cilUserUnfollow"
                            size="sm"
                            class="inline-flex items-center justify-center mr-2 text-center w-9 h-9"
                        />
                        Data Admin's
                    </PrivateSideLink>
                </ul>
            </div>
        </div>
    </nav>
</template>
