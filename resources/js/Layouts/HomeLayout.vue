<script setup>
import { ref, onMounted } from "vue";
import { Head, Link, router } from "@inertiajs/vue3";
import Banner from "@/Components/Banner.vue";
import { initAccordions, initCarousels, initCollapses, initDials, initDismisses, initDrawers, initDropdowns, initModals, initPopovers, initTabs, initTooltips, } from "flowbite";
//import { HomeIcon, HashtagIcon, BellIcon, ChatBubbleOvalLeftIcon, UserIcon, ArrowRightOnRectangleIcon, RocketLaunchIcon } from '@heroicons/vue/24/outline'
import LeftSidebar from "@/Components/LeftSidebar.vue";
import RightSidebar from "@/Components/RightSidebar.vue";
import NavbarMobile from "@/Components/NavbarMobile.vue";

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const logout = () => {
    router.post(route("logout"));
};

//flowbite
onMounted(() => {
    initAccordions();
    initCarousels();
    initCollapses();
    initDials();
    initDismisses();
    initDrawers();
    initDropdowns();
    initModals();
    initPopovers();
    initTabs();
    initTooltips();
});
</script>


<template>

    <Head :title="title" />

    <Banner />



    <div class="bg-black isolate font-sans">

        <NavbarMobile />
        <!-- MAIN LG -->
        <div class="flex">

            <div class="w-2/5 text-white pl-32 py-4 h-auto hidden lg:block">
                <LeftSidebar />
            </div>

            <div class="w-screen lg:w-3/5 border border-gray-600 h-auto border-t-0 ">
                <slot />

            </div>


            <div class="w-2/5 h-12 hidden xl:block">
                <RightSidebar />
            </div>



        </div>
    </div>
</template>
