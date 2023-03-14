<script setup>
import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import ShowMoreFeed from './ShowMoreFeed.vue';

const trendings = [
    { position: 1, hashtag: 'Mutande', nPosts: 5466 },
    { position: 2, hashtag: 'Microsoft363', nPosts: 5466 },
    { position: 3, hashtag: 'HI-Fashion', nPosts: 5466 },
    { position: 4, hashtag: 'Calzini', nPosts: 5466 },
    { position: 5, hashtag: 'Foto', nPosts: 5466 },
]

</script>

<template>
    <div class="flex">
        <div class="flex-1 m-2">
            <h2 class="px-4 py-2 text-xl w-48 font-semibold text-white">What's hot</h2>
        </div>
    </div>

    <TrendingWidgetLink v-for="trending in trendings" :position="trending.position" :hashtag="trending.hashtag"
        :nPosts="trending.nPosts" />

    <Link :href="route('dashboard')">
    <ShowMoreFeed />
    </Link>
</template>
