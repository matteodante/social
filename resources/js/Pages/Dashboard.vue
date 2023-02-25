<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import Timeline from '@/Components/Timeline.vue';
import HomeLayout from '@/Layouts/HomeLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { PlusIcon } from '@heroicons/vue/24/outline'
import TitleFeed from '@/Components/TitleFeed.vue';
import ShareFeed from '@/Components/ShareFeed.vue';
import TimelinePost from '@/Components/TimelinePost.vue';

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
