<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";

</script>
<template>


    <footer class="text-gray-600 body-font">
        <div class="bg-gray-100">
            <div class="container flex flex-col items-center px-5 py-6 mx-auto sm:flex-row">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                    <img class="inline-block h-16 py-2 mr-4 text-sm font-bold leading-relaxed text-white uppercase w-11 whitespace-nowrap"
                         src="/img/LOGOKLINIKPRATAMAUP.jpg"
                         alt="">

                    <span class="ml-3 text-xl">Klinik Pratama</span>
                </a>

                <p class="mt-4 text-sm text-gray-500 sm:ml-6 sm:mt-0">Copyright © {{ /\d{4}/.exec(Date())[0] }} By TH
                </p>
                <h2>Alamat :
                    <a class="link"
                       href="https://goo.gl/maps/6fevAZ6yguas18sa8">
                        Jl. Tuanku Tambusai No.23, Bangkinang, Kec. Bangkinang, Kabupaten Kampar, Riau 28412
                    </a>
                </h2>
                <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
                    <a href="https://goo.gl/maps/6fevAZ6yguas18sa8"
                       target="_blank"
                       class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none">
                        <CIcon :icon="icon.cibGoogle"
                               size="sm"
                               class="inline-flex items-center justify-center w-5 h-5 text-center align-middle" />
                    </a>
                    <a href="#"
                       target="_blank"
                       class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none">
                        <CIcon :icon="icon.cibFacebook"
                               size="sm"
                               class="inline-flex items-center justify-center w-5 h-5 text-center align-middle" />
                    </a>
                    <a href="#"
                       target="_blank"
                       class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none">
                        <CIcon :icon="icon.cibTwitter"
                               size="sm"
                               class="inline-flex items-center justify-center w-5 h-5 text-center align-middle" />
                    </a>
                    <a href="#"
                       target="_blank"
                       class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none">
                        <CIcon :icon="icon.cibInstagram"
                               size="sm"
                               class="inline-flex items-center justify-center w-5 h-5 text-center align-middle" />
                    </a>
                </span>
            </div>
        </div>
    </footer>

</template>