<script setup>
import GuestLayout from "@/Layouts/V1/GuestLayout.vue";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
import Footer from "./Component/Footer.vue";
</script>
<template>
    <GuestLayout>
        <div>
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                 style="background-image: url('/img/bg2.jpg')">
                <span id="blackOverlay"
                      class="absolute w-full h-full bg-black opacity-75"></span>
            </div>
            <main>
                <section class="relative pt-20 pb-5">
                    <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
                         style="height: 80px"></div>
                    <div class="container px-4 mx-auto">
                        <div class="flex flex-wrap items-center">
                            <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                                <img alt="..."
                                     class="max-w-full rounded-lg shadow-lg"
                                     src="/img/homeimage1.jpg" />
                            </div>
                            <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                                <div class="md:pr-12">
                                    <h3 class="text-3xl font-semibold text-white">
                                        KESEMBUHAN PASIEN ADALAH KEBAHAGIAAN KAMI
                                    </h3>
                                    <p class="mt-3 font-semibold text-white ">
                                        Visi :
                                    </p>
                                    <span class="text-yellow-400 text-stroke-light-800 text-extra-bold">
                                        MENJADI KLINIK PILIHAN UTAMA MASYARAKAT
                                    </span>
                                    <p class="mt-4 text-lg leading-relaxed text-white">
                                        Misi
                                    </p>
                                    <ul class="list-none ">
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                          class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                        <CIcon :icon="icon.cilCaretRight"
                                                               size="sm"
                                                               class="w-4 h-4" />
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-yellow-500">
                                                        Memberikan pelayanan prefentif, kuratif dan rehabilitative yang
                                                        komprehensif dan berkesinambungan
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                          class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                        <CIcon :icon="icon.cilCaretRight"
                                                               size="sm"
                                                               class="w-4 h-4" />
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-yellow-500">
                                                        Memberikan pelayanan kesehatan bermutu dan mengutamakan kepuasan
                                                        pasien
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                          class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                        <CIcon :icon="icon.cilCaretRight"
                                                               size="sm"
                                                               class="w-4 h-4" />
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-yellow-500">
                                                        Menyediakan sarana dan prasarana bermutu baik & terpercaya
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                          class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                        <CIcon :icon="icon.cilCaretRight"
                                                               size="sm"
                                                               class="w-4 h-4" />
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-yellow-500">
                                                        Menyediakan SDM yang professional, kreatif, santun dan berakhlak
                                                        mulia
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                          class="inline-block px-2 py-1 mr-3 text-xs font-semibold uppercase bg-pink-200 rounded-full">
                                                        <CIcon :icon="icon.cilCaretRight"
                                                               size="sm"
                                                               class="w-4 h-4" />
                                                    </span>
                                                </div>
                                                <div>
                                                    <h4 class="text-yellow-500">
                                                        Membantu menyukseskan program pemerintah yaitu Jaminan Kesehatan
                                                        Nasional (JKN).

                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <Footer />
            </main>
        </div>
    </GuestLayout>
</template>
