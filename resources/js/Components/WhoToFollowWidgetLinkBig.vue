<script setup>
import { Link } from '@inertiajs/vue3'
const { name, username, pic } = defineProps({
    name: String,
    username: String,
    pic: String,
    bigPic: { type: String, required: false }
})


</script>

<template>
    <div class="block relative rounded-lg flex-shrink-0 antialiased px-5 py-2">

        <div class="h-28 p-4 w-auto relative block rounded-lg overflow-hidden">
            <Link :href="route('dashboard')">
            <div class="absolute inset-0">
                <img :src="bigPic"
                    class="h-full w-full object-cover object-center rounder-lg hover:scale-105 transition-all">
            </div>
            <div class="flex flex-wrap absolute left-0 right-0 bottom-0 pl-32 pr-3 pb-2 pt-2 bg-opacity-20 bg-black">
                <div
                    class="block rounded-full border-4 absolute left-6 bottom-4 shadow-2xl hover:scale-110 transition-all">
                    <span class="w-full h-full">
                        <div class="">
                            <img :src="pic" class="block object-cover relative h-20 w-20 rounded-full">
                        </div>
                    </span>
                </div>
                <div class="flex flex-row items-center max-w-full justify-start">
                    <div class="min-w-0 block text-white">
                        <div class="text-lg leading-4 text-white block overflow-hidden relative pr-5 font-semibold ">
                            <span class="font-sans">{{ name }}</span>
                        </div>
                        <div class="text-sm text-white m-0 overflow-hidden relative font-light justify-start">
                            <span class="font-sans italic">@{{ username }}</span>
                        </div>
                    </div>
                </div>
            </div>
            </Link>
        </div>

    </div>



</template>


<!--                 <div class="flex justify-start max-w-full">
    <div class="min-w-0 block text-white">
        <div class="">
            {{ name }}
        </div>
        <div class="">
            @{{ username }}
        </div>
    </div>
</div>
<div class="">

</div> -->
