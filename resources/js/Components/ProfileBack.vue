<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue';

const { username, nPosts } = defineProps({
    username: String,
    nPosts: Number,
})
</script>

<template>
    <div class="px-4 py-2 mx-2 text-white">
        <Link :href="route('dashboard')" class=" text-2xl font-medium rounded-full float-right hover:bg-gray-900">
        <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <g>
                <path
                    d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                </path>
            </g>
        </svg>
        </Link>
    </div>
    <div class="m-2 text-white">
        <h2 class="mb-0 text-xl font-bold ">matteodante98</h2>
        <p class="mb-0 w-48 text-xs ">9,416 Tweets</p>
    </div>
</template>
