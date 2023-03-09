<script setup>
const props = defineProps({
    text: String,
    media: Boolean,
    mediaType: String,
    mediaSrc: String
})

</script>

<template>
    <p class="width-auto flex-shrink leading-5 antialiased">
        {{ text }}
    </p>

    <div v-if="media" class="md:flex-shrink pt-3">
        <img v-if="mediaType == 'image'" class="rounded-lg w-full h-96 object-cover" :src="mediaSrc" />
    </div>

    <div v-if="media" class="md:flex-shrink pt-3">
        <video v-if="mediaType == 'video'" class="rounded-lg w-full h-96 object-cover" :src="mediaSrc" />
    </div>
</template>
