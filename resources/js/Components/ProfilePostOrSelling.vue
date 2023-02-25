
<script setup>
import { ref, shallowRef } from 'vue';
import ProfileTimelinePosts from '@/Components/ProfileTimelinePosts.vue';
import ProfileTimelineSelling from '@/Components/ProfileTimelineSelling.vue';

const whichComponent = shallowRef(ProfileTimelinePosts);

const view = (which) => {
    whichComponent.value = which;
}



</script>
<template>
    <div id="wrapper">
        <div id="choice">
            <ul class="flex relative flex-wrap p-0 list-none">
                <li
                    class="flex-1 justify-center text-center border-b-2 transition-all border-gray-600 active:border-light-100 hover:border-light-400">
                    <button @click="view(ProfileTimelinePosts)" class=" leading-6 font-normal m-3">
                        <span class="text-white">Posts</span>
                    </button>
                </li>
                <li
                    class="flex-1 justify-center text-center border-b-2 transition-all border-gray-600 active:border-light-100 hover:border-light-400">
                    <button @click="view(ProfileTimelineSelling)" class=" leading-6 font-normal m-3">
                        <span class="text-white">Selling</span>
                    </button>
                </li>
            </ul>
        </div>

        <KeepAlive>
            <Transition name="media" mode="out-in" appear>
                <component :is="whichComponent" />
            </Transition>
        </KeepAlive>
    </div>
</template>

<style>
.media-enter-active,
.media-leave-active {
    transition: opacity 0.1s ease;
}

.media-enter,
.media-leave-to {
    opacity: 0;
}
</style>
