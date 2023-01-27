<script setup>
import { ref } from 'vue';
import { Dialog, DialogPanel } from "@headlessui/vue";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";
const mobileMenuOpen = ref(false);
</script>

<style>
@import url(https://pro.fontawesome.com/releases/v5.10.0/css/all.css);
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800&display=swap');
</style>

<template>
    <!-- NAVBAR MOBILE -->
    <div class="lg:hidden fixed bottom-0 h-16 w-full flex justify-around text-white  bg-black border border-gray-600 ">
        <a href="#" class="flex items-center justify-center ">
            <svg class="h-6 w-6 " stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6" />
            </svg>
        </a>
        <a href="#" class="flex items-center justify-center">
            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
        </a>
        <a href="#" class="flex items-center justify-center">
            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
        </a>
        <a href="#" class="flex items-center justify-center">
            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
            </svg>

        </a>
        <a href="#" class="flex items-center justify-center">
            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </a>
    </div>

</template>
