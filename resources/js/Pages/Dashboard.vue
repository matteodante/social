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

    <ShareFeed />

    <TimelinePost />

    <TimelinePost />

    <TimelinePost />

    <TimelinePost />
</template>
