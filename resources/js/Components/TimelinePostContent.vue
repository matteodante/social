<script setup>
const props = defineProps({
    text: String,
    media: Boolean,
    mediaType: String,
    mediaSrc: String
})

</script>

<template>

    <p class="text-base width-auto font-medium text-white flex-shrink pr-6">
        Day 07 of the challenge <span class="text-light-400">#100DaysOfCode</span>
        I was wondering what I can do with <span class="text-light-400">#tailwindcss</span>, so just
        started building Twitter UI using Tailwind and so far it looks so promising. I will post my code
        after completion.
        [07/100]
        <span class="text-light-400"> #WomenWhoCode #CodeNewbie</span>
    </p>

    <div class="md:flex-shrink pr-6 pt-3">
        <img class="rounded-lg w-full h-96 object-cover"
            src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80"
            alt="Woman paying for a purchase">
    </div>
</template>
