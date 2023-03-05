<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import HomeLayout from '@/Layouts/HomeLayout.vue';
import { PlusIcon } from '@heroicons/vue/24/outline'

</script>

<script>

export default {
    layout: (h, page) => h(HomeLayout, { title: 'Dashboard' }, () => page)
}

</script>

<template>
    <TitleFeed title="Home" />

    <hr class="border-gray-600">

    <ShareFeed />

    <hr class="border-gray-600">

    <TimelinePost />

    <hr class="border-gray-600">

    <TimelinePost />

    <hr class="border-gray-600">

    <TimelinePost />

    <hr class="border-gray-600">

    <TimelinePost />
</template>
