<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { PlusIcon } from '@heroicons/vue/24/outline'
import { ref, computed, reactive, onMounted } from 'vue'
import { useForm } from '@inertiajs/vue3';
import videojs from 'video.js';
import 'video.js/dist/video-js.css';

const props = defineProps({

})

const photoInput = ref(null)
const videoInput = ref(null)
const photoPreview = ref(null);
const showPhotoPreview = ref(false);

const videoPreview = ref(null);
const showVideoPreview = ref(false);
let player = false;

const photoDialog = (event) => {
    photoInput.value.click();
}

const videoDialog = (event) => {
    videoInput.value.click();
}

const handleAddPhoto = (event) => {

    const photo = photoInput.value.files[0];

    if (!photo) return;

    if (showVideoPreview.value === true) {
        showVideoPreview.value = false;
        player.pause();
        videoInput.value.value = null;
    }

    const reader = new FileReader();

    reader.onload = (e) => {
        photoPreview.value = e.target.result;
    };

    reader.readAsDataURL(photo);

    showPhotoPreview.value = true;
}

const handleAddVideo = (event) => {

    const video = videoInput.value.files[0];

    if (!video) return;

    if (showPhotoPreview.value === true) {
        showPhotoPreview.value = false;
        photoInput.value.value = null;
    }

    const fileType = video.type;

    const reader = new FileReader();

    reader.readAsArrayBuffer(video);

    reader.onload = (e) => {

        // The file reader gives us an ArrayBuffer:
        let buffer = e.target.result;

        // We have to convert the buffer to a blob:
        let videoBlob = new Blob([new Uint8Array(buffer)], { type: 'video/mp4' });

        // The blob gives us a URL to the video file:
        let url = window.URL.createObjectURL(videoBlob);

        player = videojs(videoPreview.value, { controls: true, fill: true, autoplay: true, aspectRatio: '4:3' });

        player.src({ src: url, type: fileType });

        showVideoPreview.value = true;

    };


}

const storePostForm = useForm({
    content: '',
    photo: '',
    video: '',
});


const handleFormSubmit = async () => {
    if (photoInput.value) {
        storePostForm.photo = photoInput.value.files[0];
    }

    if (videoInput.value) {
        storePostForm.video = videoInput.value.files[0];
    }



    storePostForm.post(route('posts.store'), {
        preserveScroll: true,
        onSuccess: () => storePostForm.reset(),
    });
}
</script>

<template>
    <div class="flex border-arrow border-b-0">
        <div class="flex-1 px-2 pt-2 mt-2">

            <textarea id="message" rows="4"
                class="w-full focus:ring-jet focus:border-jet placeholder-smoky border-0 rounded transition duration-300"
                placeholder="Write a new post..."></textarea>


        </div>
    </div>
    <!--middle creat tweet below icons-->
    <div class="flex border-arrow">
        <div class="w-64 p-2">

            <div class="flex items-center">

                <ShareFeedIcon for="image">
                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </ShareFeedIcon>

                <ShareFeedIcon for="video">
                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                        </path>
                        <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </ShareFeedIcon>

                <ShareFeedIcon for="sell">
                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </ShareFeedIcon>

            </div>
        </div>

        <div class="flex-1">
            <PrimaryButton class="float-right mr-8 w-32">
                <span>Post</span>
            </PrimaryButton>
        </div>
    </div>
</template>
