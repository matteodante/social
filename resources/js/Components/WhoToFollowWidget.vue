<script setup>
import WhoToFollowWidgetLink from '@/Components/WhoToFollowWidgetLink.vue';
import WhoToFollowWidgetLinkBig from '@/Components/WhoToFollowWidgetLinkBig.vue';
import { Link, router } from '@inertiajs/vue3'
import { ArrowPathIcon } from '@heroicons/vue/24/outline'

const whoToFollow = [
    { name: 'Matteo Dante', username: 'matteodante98', bigPic: 'https://public.onlyfans.com/files/thumbs/w480/t/ts/tsa/tsa7xoik8vrc19riioeyfzh0vwoe8bdu1643338401/header.jpg', pic: 'https://public.onlyfans.com/files/thumbs/c144/4/4f/4fk/4fkohlafprticmjbtqdgljv1hstzlwwl1674335726/141416776/avatar.jpg' },
    { name: 'Shakira', username: 'shakiretta', bigPic: 'https://public.onlyfans.com/files/thumbs/w480/t/ts/tsa/tsa7xoik8vrc19riioeyfzh0vwoe8bdu1643338401/header.jpg', pic: 'https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png' },
    { name: 'Valeria Carboni', username: 'vlrcbn', bigPic: 'https://public.onlyfans.com/files/thumbs/w480/t/ts/tsa/tsa7xoik8vrc19riioeyfzh0vwoe8bdu1643338401/header.jpg', pic: 'https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png' },

]

</script>

<template>
    <div class="flex">
        <div class="flex-1 m-2">
            <h2 class="px-4 py-2 text-xl font-semibold text-white">You might like</h2>
        </div>
        <button class="px-4 py-2 text-white content-end hover:text-light-100 transition-colors">
            <ArrowPathIcon class="text-xl w-6 font-semibold" />
        </button>
    </div>


    <WhoToFollowWidgetLinkBig class="hover:bg-gray-800 hover:scale-105 transition-all" v-for="who in whoToFollow"
        :name="who.name" :username="who.username" :pic="who.pic" :bigPic="who.bigPic" />

    <Link :href="route('dashboard')">
    <div class="text-center hover:bg-gray-800 transition-all">
        <div class="p-4">
            <span class="px-4 font-normal text-light-400">Show more</span>
        </div>
    </div>
    </Link>

</template>
