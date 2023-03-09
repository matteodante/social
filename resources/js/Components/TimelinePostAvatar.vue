<script setup>
import { Link } from '@inertiajs/vue3'
const { name, username, date } = defineProps({
    name: String,
    username: String,
    date: { type: String, required: false },
    img: String,
})

function getTimeAgo(dateStr) {
    const timestamp = Date.parse(dateStr);
    const date = new Date(timestamp);
    const now = new Date();

    const diff = Math.round((now - date) / 1000); // in seconds

    if (diff < 60) {
        return `${diff} seconds ago`;
    } else if (diff < 60 * 60) {
        const mins = Math.round(diff / 60);
        return `${mins} ${mins === 1 ? 'minute' : 'minutes'} ago`;
    } else if (diff < 60 * 60 * 24) {
        const hours = Math.round(diff / (60 * 60));
        return `${hours} ${hours === 1 ? 'hour' : 'hours'} ago`;
    } else if (diff < 60 * 60 * 24 * 30) {
        const days = Math.round(diff / (60 * 60 * 24));
        return `${days} ${days === 1 ? 'day' : 'days'} ago`;
    } else {
        return date.toLocaleDateString();
    }
}


</script>

<template>
    <div class="flex flex-row p-4 text-smoky">
        <Link :href="'/' + name" class="flex-1 group block">
        <div class="flex items-center">
            <div>
                <img class="inline-block h-12 w-12 rounded-full" :src="img" alt="" />
            </div>
            <div class="ml-3">
                <p class="leading-6 font-semibold ">
                    {{ name }}
                </p>
                <p class="text-sm leading-5 font-light italic">
                    @{{ username }}
                </p>
            </div>
        </div>
        </Link>
        <div class="flex-1 text-right align-bottom">
            <p class="leading-6 font-light italic text-xs">
                {{ getTimeAgo(date) }}
            </p>
        </div>
    </div>
</template>
