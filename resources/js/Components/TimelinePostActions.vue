<script setup>
import { ref } from 'vue';
const { likes, comments, isLiked, isCommented, isSaved } = defineProps({
    likes: Number,
    comments: Number,
    isLiked: { type: Boolean, default: false },
    isCommented: { type: Boolean, default: false },
    isSaved: { type: Boolean, default: false }
})

const isSavedRef = ref(isSaved)
const isLikedRef = ref(isLiked)

const ToggleSave = () => {
    isSavedRef.value = !isSavedRef.value
}

const ToggleLike = () => {
    isLikedRef.value = !isLikedRef.value
}

</script>

<template>
    <div class="flex flex-row justify-between items-start">
        <div class="flex items-center">

            <ShareFeedIcon for="like" :active="isLikedRef" @click="ToggleLike">
                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
                <p class="ml-2 text-xs font-light">258</p>
            </ShareFeedIcon>

            <ShareFeedIcon for="comment">
                <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg>
                <p class="ml-2 text-xs font-light">143</p>
            </ShareFeedIcon>



        </div>
        <div class="flex items-end">
            <ShareFeedIcon for="save" :active="isSavedRef" @click="ToggleSave">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                </svg>
                <p class="ml-2 text-xs font-light">Save</p>
            </ShareFeedIcon>

        </div>


    </div>
</template>
