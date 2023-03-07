
<script setup>
import { ref, shallowRef, computed } from 'vue';
import ProfileTimelinePosts from '@/Components/ProfileTimelinePosts.vue';
import ProfileTimelineSelling from '@/Components/ProfileTimelineSelling.vue';

const whichComponent = shallowRef(ProfileTimelinePosts);

const view = (which) => {
    whichComponent.value = which;
}

const activePosts = computed(() => whichComponent.value == ProfileTimelinePosts)
const activeSelling = computed(() => whichComponent.value == ProfileTimelineSelling)



</script>
<template>
    <div id="wrapper">
        <div id="choice" class="border-arrow">
            <ul class="flex relative flex-wrap p-0 list-none">
                <li @click="view(ProfileTimelinePosts)"
                    class="flex-1 justify-center text-center transition-all border-b-2 hover:bg-bittersweet hover:bg-opacity-50"
                    :class="[activePosts ? 'border-bittersweet' : 'border-white']">
                    <button class=" leading-6 font-normal m-3">
                        <span class="">Posts</span>
                    </button>
                </li>
                <li @click="view(ProfileTimelineSelling)"
                    class="flex-1 justify-center text-center transition-all border-b-2 hover:bg-bittersweet hover:bg-opacity-50"
                    :class="[activeSelling ? 'border-bittersweet' : 'border-white']">

                    <button class=" leading-6 font-normal m-3">
                        <span class="">Selling</span>
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
