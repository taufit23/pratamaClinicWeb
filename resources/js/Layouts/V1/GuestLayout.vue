<script setup>
    import NavLeftLink from '@/Components/V1/Navbar/NavLeftLink.vue';
    import NavAplicationLogo from '@/Components/V1/Navbar/NavAplicationLogo.vue';
    import NavRightLink from '@/Components/V1/Navbar/NavRightLink.vue';
    import AuthBackground from '@/Components/V1/Background/AuthBackground.vue';
</script>
<template>
    <div class="text-gray-800 antialiased">
        <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-1 ">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                <NavAplicationLogo></NavAplicationLogo>
                <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                    id="example-collapse-navbar">
                    <ul class="flex flex-col lg:flex-row list-none mr-auto">
                        <li class="flex items-center">
                            <NavLeftLink :href="route('home.index')" :active="route().current('home.index')">Home
                            </NavLeftLink>
                        </li>
                    </ul>
                    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                        <li class="flex items-center px-1">
                            <NavRightLink :href="route('login.index')" :active="route().current('login.index')">
                                Login
                            </NavRightLink>
                        </li>
                        <li class="flex items-center px-1">
                            <NavRightLink :href="route('register.index')" :active="route().current('register.index')">
                                Register
                            </NavRightLink>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <section class="absolute w-full h-full">
                <slot />

            </section>
        </main>
    </div>
</template>