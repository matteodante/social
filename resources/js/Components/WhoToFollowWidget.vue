<script setup>
import { Link, router } from '@inertiajs/vue3'
import { ArrowPathIcon } from '@heroicons/vue/24/outline'

const whoToFollow = [
    { name: 'Matteo Dante', username: 'matteodante98', bigPic: 'https://public.onlyfans.com/files/thumbs/w480/t/ts/tsa/tsa7xoik8vrc19riioeyfzh0vwoe8bdu1643338401/header.jpg', pic: 'https://public.onlyfans.com/files/thumbs/c144/4/4f/4fk/4fkohlafprticmjbtqdgljv1hstzlwwl1674335726/141416776/avatar.jpg' },
    { name: 'Shakira', username: 'shakiretta', bigPic: 'https://public.onlyfans.com/files/thumbs/w480/t/ts/tsa/tsa7xoik8vrc19riioeyfzh0vwoe8bdu1643338401/header.jpg', pic: 'https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png' },
    { name: 'Valeria Carboni', username: 'vlrcbn', bigPic: 'https://public.onlyfans.com/files/thumbs/w480/t/ts/tsa/tsa7xoik8vrc19riioeyfzh0vwoe8bdu1643338401/header.jpg', pic: 'https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png' },
]

const { hover } = defineProps({
    hover: { type: Boolean, required: false, default: false },
})

</script>

<template>
    <div class="flex">
        <div class="flex-1 m-2 text-smoky">
            <h2 class="px-4 py-2 text-xl font-semibold">You might like</h2>
        </div>
        <button class="px-4 py-2  content-end hover:text-jet transition-all hover:rotate-90 active:rotate-180">
            <ArrowPathIcon class="text-xl w-6 font-semibold" />
        </button>
    </div>


    <WhoToFollowWidgetLinkBig class="transition-all" v-for="who in whoToFollow" :name="who.name" :username="who.username"
        :pic="who.pic" :bigPic="who.bigPic" :hover="hover" />

    <Link :href="route('dashboard')">
    <ShowMoreFeed />
    </Link>
</template>
