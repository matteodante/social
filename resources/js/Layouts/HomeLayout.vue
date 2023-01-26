<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';

import { onMounted } from 'vue'
import {
    initAccordions,
    initCarousels,
    initCollapses,
    initDials,
    initDismisses,
    initDrawers,
    initDropdowns,
    initModals,
    initPopovers,
    initTabs,
    initTooltips
} from 'flowbite'


import LeftSidebar from '@/Components/LeftSidebar.vue';
import RightSidebar from '@/Components/RightSidebar.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};

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
})

</script>

<template>
    <div>

        <Head :title="title" />

        <Banner />

        <div class="">
            <div class="flex h-screen">
                <div class="w-1/6 bg-gray-300 h-screen overflow-auto">
                    Navigazione
                </div>
                <div class="w-4/6">
                    Contenuti principali
                </div>
                <div class="w-1/6 bg-gray-300 h-screen overflow-auto">
                    Contenuti secondari
                </div>
            </div>

        </div>

    </div>

</template>
