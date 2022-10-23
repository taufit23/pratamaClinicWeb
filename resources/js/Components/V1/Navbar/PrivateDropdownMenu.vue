<script>
import { createPopper } from "@popperjs/core";
import NavLeftLink from "./NavLeftLink.vue";
import DropdownLink from "./DropdownLink.vue";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
export default {
    data() {
        return {
            dropdownPopoverShow: false,
        };
    },
    methods: {
        toggleDropdown: function (event) {
            event.preventDefault();
            if (this.dropdownPopoverShow) {
                this.dropdownPopoverShow = false;
            } else {
                this.dropdownPopoverShow = true;
                createPopper(
                    this.$refs.btnDropdownRef,
                    this.$refs.popoverDropdownRef,
                    {
                        placement: "bottom-end",
                    }
                );
            }
        },
    },
    components: {
        NavLeftLink,
        DropdownLink,
        CIcon,
    },
    setup() {
        return {
            icon,
        };
    },
};
</script>
<template>
    <div>
        <a
            class="block text-blueGray-500"
            v-on:click="toggleDropdown($event)"
            ref="btnDropdownRef"
        >
            <div class="flex items-center">
                <strong class="flex text-black ring-opacity-40">
                    <CIcon
                        :icon="icon.cilArrowCircleBottom"
                        size="sm"
                        class="inline-flex items-center justify-center w-5 h-5 mt-0.5 mr-1 text-center align-middle"
                    />
                    {{ $page.props.auth.user.username }}
                </strong>
            </div>
        </a>
        <div
            ref="popoverDropdownRef"
            class="z-50 float-left py-2 mt-1 text-base text-left list-none bg-white rounded shadow-lg"
            v-bind:class="{
                hidden: !dropdownPopoverShow,
                block: dropdownPopoverShow,
            }"
            style="min-width: 12rem"
        >
            <DropdownLink
                :href="route('profile.index')"
                :active="route().current('profile.index')"
                v-if="$page.props.auth.user.role == 'pasien'"
            >
                Profile
            </DropdownLink>
            <DropdownLink
                :href="route('admin.profile.index')"
                :active="route().current('admin.profile.index')"
                v-if="$page.props.auth.user.role == 'admin'"
            >
                Profile
            </DropdownLink>
            <div class="h-0 my-1 border border-solid border-blueGray-100" />
            <DropdownLink
                :href="route('logout.store')"
                :active="route().current('logout.store')"
                medhod="post"
            >
                LogOut
            </DropdownLink>
        </div>
    </div>
</template>
