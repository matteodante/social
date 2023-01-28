<script setup>
import WhoToFollowWidgetLink from '@/Components/WhoToFollowWidgetLink.vue';
import WhoToFollowWidgetLinkBig from '@/Components/WhoToFollowWidgetLink.vue';
import { Link, router } from '@inertiajs/vue3'

const whoToFollow = [
    { name: 'Matteo Dante', username: 'matteodante98', pic: 'https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png' },
    { name: 'Shakira', username: 'shakiretta', pic: 'https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png' },
    { name: 'Valeria Carboni', username: 'vlrcbn', pic: 'https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png' },

]

</script>

<template>

    <div class="flex">
        <div class="flex-1 m-2">
            <h2 class="px-4 py-2 text-xl w-48 font-semibold text-white">Who to follow</h2>
        </div>
    </div>


    <!--first person who to follow-->
    <WhoToFollowWidgetLinkBig v-for="who in whoToFollow" :name="who.name" :username="who.username" :pic="who.pic" />

    <!--show more-->

    <Link :href="route('dashboard')">
    <div class="text-center hover:bg-gray-800 transition-all">
        <div class="p-4">
            <span class="px-4 font-normal text-light-400">Show more</span>
        </div>
    </div>
    </Link>

</template>
