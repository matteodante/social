<script setup>
import { Link, router } from '@inertiajs/vue3';

const { position, hashtag, nPosts } = defineProps({
    position: Number,
    hashtag: String,
    nPosts: Number,
})

</script>

<template>
    <Link :href="route('dashboard')">
    <div class="flex hover:bg-bittersweet hover:bg-opacity-25 transition-all">
        <div class="flex-1">
            <p class="px-4 ml-2 mt-3 w-48 text-xs text-smoky">{{ position }} Trending</p>
            <h2 class="px-4 ml-2 w-48 font-bold text-white">#{{ hashtag }}</h2>
            <p class="px-4 ml-2 mb-3 w-48 text-xs text-smoky">{{ nPosts }} Tweets</p>
        </div>
    </div>
    </Link>
</template>
