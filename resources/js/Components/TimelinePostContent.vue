<script setup>
import { computed, reactive } from 'vue';

const props = defineProps({
    text: String,
    media: Boolean,
    mediaType: String,
    mediaThumb: String,
    mediaSrc: String
})

const videoOptions = computed(() => {
    return {
        autoplay: false,
        controls: true,
        sources: [
            {
                src: props.mediaSrc,
                type: 'video/mp4'
            }
        ],
        poster: props.mediaThumb,
    }
})



</script>

<template>
    <p class="width-auto flex-shrink leading-5 antialiased">
        {{ text }}
    </p>

    <div v-if="media" class="md:flex-shrink pt-3">
        <img v-if="mediaType == 'image'" class="rounded-lg w-full h-96 object-cover" :src="props.mediaSrc"
            :poster="props.mediaThumb" />
    </div>

    <div v-if="media" class="md:flex-shrink pt-3">
        <TimelinePostVideoPlayer :options="videoOptions"></TimelinePostVideoPlayer>
    </div>
</template>
