<script setup>
import GuestLayout from "@/Layouts/V1/GuestLayout.vue";
import { CIcon } from "@coreui/icons-vue";
import * as icon from "@coreui/icons";
</script>
<template>
    <GuestLayout>
        <div>
            <!-- <navbar-component></navbar-component> -->

            <!-- Jumbotron -->
            <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('/img/bg1.jpg')"
            >
                <span
                    id="blackOverlay"
                    class="w-full h-full absolute opacity-75 bg-black"
                ></span>
            </div>
            <main>
                <section class="relative py-20">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
                        style="height: 80px"
                    ></div>
                    <div class="container px-4 mx-auto">
                        <div class="flex flex-wrap items-center">
                            <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                                <img
                                    alt="..."
                                    class="max-w-full rounded-lg shadow-lg"
                                    src=""
                                />
                            </div>
                            <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                                <div class="md:pr-12">
                                    <h3
                                        class="text-3xl font-semibold text-white"
                                    >
                                        A growing company
                                    </h3>
                                    <p
                                        class="mt-4 text-lg leading-relaxed text-white"
                                    >
                                        The extension comes with three pre-built
                                        pages to help you get started faster.
                                        You can change the text and images and
                                        you're good to go.
                                    </p>
                                    <ul class="mt-6 list-none">
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                                                        ><i
                                                            class="fas fa-fingerprint"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                        Carefully crafted
                                                        components
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                                                        ><i
                                                            class="fab fa-html5"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                        Amazing page examples
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="flex items-center">
                                                <div>
                                                    <span
                                                        class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                                                        ><i
                                                            class="far fa-paper-plane"
                                                        ></i
                                                    ></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-gray-600">
                                                        Dynamic components
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
                <!--
                <section class="pt-20 pb-48">
                    <div class="container px-4 mx-auto">
                        <div class="flex flex-wrap justify-center mb-24 text-center">
                            <div class="w-full px-4 lg:w-6/12">
                                <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                                <p class="m-4 text-lg leading-relaxed text-gray-600">
                                    According to the National Oceanic and Atmospheric
                                    Administration, Ted, Scambos, NSIDClead scentist, puts the
                                    potentially record maximum.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                                <div class="px-6">
                                    <img alt="..." src=""
                                        class="max-w-full mx-auto rounded-full shadow-lg" style="max-width: 120px;" />
                                    <div class="pt-6 text-center">
                                        <h5 class="text-xl font-bold">Ryan Tompson</h5>
                                        <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                                            Web Developer
                                        </p>
                                        <div class="mt-6">
                                            <button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-blue-400 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-twitter"></i></button><button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-blue-600 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-facebook-f"></i></button><button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-pink-500 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-dribbble"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                                <div class="px-6">
                                    <img alt="..." src=""
                                        class="max-w-full mx-auto rounded-full shadow-lg" style="max-width: 120px;" />
                                    <div class="pt-6 text-center">
                                        <h5 class="text-xl font-bold">Romina Hadid</h5>
                                        <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                                            Marketing Specialist
                                        </p>
                                        <div class="mt-6">
                                            <button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-google"></i></button><button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-blue-600 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                                <div class="px-6">
                                    <img alt="..." src=""
                                        class="max-w-full mx-auto rounded-full shadow-lg" style="max-width: 120px;" />
                                    <div class="pt-6 text-center">
                                        <h5 class="text-xl font-bold">Alexa Smith</h5>
                                        <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                                            UI/UX Designer
                                        </p>
                                        <div class="mt-6">
                                            <button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-google"></i></button><button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-blue-400 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-twitter"></i></button><button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-gray-800 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-instagram"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                                <div class="px-6">
                                    <img alt="..." src=""
                                        class="max-w-full mx-auto rounded-full shadow-lg" style="max-width: 120px;" />
                                    <div class="pt-6 text-center">
                                        <h5 class="text-xl font-bold">Jenna Kardi</h5>
                                        <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                                            Founder and CEO
                                        </p>
                                        <div class="mt-6">
                                            <button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-pink-500 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-dribbble"></i></button><button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-google"></i></button><button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-blue-400 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-twitter"></i></button><button
                                                class="w-8 h-8 mb-1 mr-1 text-white bg-gray-800 rounded-full outline-none focus:outline-none"
                                                type="button">
                                                <i class="fab fa-instagram"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="relative block pb-20 bg-gray-900">
                    <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
                        style="height: 80px;">
                        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                    </div>
                    <div class="container px-4 mx-auto lg:pt-24 lg:pb-64">
                        <div class="flex flex-wrap justify-center text-center">
                            <div class="w-full px-4 lg:w-6/12">
                                <h2 class="text-4xl font-semibold text-white">Build something</h2>
                                <p class="mt-4 mb-4 text-lg leading-relaxed text-gray-500">
                                    Put the potentially record low maximum sea ice extent tihs year
                                    down to low ice. According to the National Oceanic and
                                    Atmospheric Administration, Ted, Scambos.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-center mt-12">
                            <div class="w-full px-4 text-center lg:w-3/12">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg">
                                    <i class="text-xl fas fa-medal"></i>
                                </div>
                                <h6 class="mt-5 text-xl font-semibold text-white">
                                    Excelent Services
                                </h6>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Some quick example text to build on the card title and make up
                                    the bulk of the card's content.
                                </p>
                            </div>
                            <div class="w-full px-4 text-center lg:w-3/12">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg">
                                    <i class="text-xl fas fa-poll"></i>
                                </div>
                                <h5 class="mt-5 text-xl font-semibold text-white">
                                    Grow your market
                                </h5>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Some quick example text to build on the card title and make up
                                    the bulk of the card's content.
                                </p>
                            </div>
                            <div class="w-full px-4 text-center lg:w-3/12">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg">
                                    <i class="text-xl fas fa-lightbulb"></i>
                                </div>
                                <h5 class="mt-5 text-xl font-semibold text-white">Launch time</h5>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Some quick example text to build on the card title and make up
                                    the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="relative block py-24 bg-gray-900 lg:pt-0">
                    <div class="container px-4 mx-auto">
                        <div class="flex flex-wrap justify-center -mt-48 lg:-mt-64">
                            <div class="w-full px-4 lg:w-6/12">
                                <div
                                    class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-300 rounded-lg shadow-lg">
                                    <div class="flex-auto p-5 lg:p-10">
                                        <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                                        <p class="mt-1 mb-4 leading-relaxed text-gray-600">
                                            Complete this form and we will get back to you in 24 hours.
                                        </p>
                                        <div class="relative w-full mt-8 mb-3">
                                            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                                for="full-name">Full Name</label><input type="text"
                                                class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                                                placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                                        </div>
                                        <div class="relative w-full mb-3">
                                            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                                for="email">Email</label><input type="email"
                                                class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                                                placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                        </div>
                                        <div class="relative w-full mb-3">
                                            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                                for="message">Message</label><textarea rows="4" cols="80"
                                                class="w-full px-3 py-3 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                                                placeholder="Type a message..."></textarea>
                                        </div>
                                        <div class="mt-6 text-center">
                                            <button
                                                class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-gray-900 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none"
                                                type="button" style="transition: all 0.15s ease 0s;">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
            </main>
            <footer-component></footer-component>
        </div>
    </GuestLayout>
</template>
