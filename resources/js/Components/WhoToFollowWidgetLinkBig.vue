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
    <div class="block relative rounded-lg max-w-xs flex-shrink-0 transition-transform antialiased mb-5">

        <div class="h-28 p-4 w-auto mb-4 relative block rounded-lg overflow-hidden">
            <Link :href="route('dashboard')">
            <div class="absolute inset-0">
                <img :src="bigPic" class="h-full w-full object-cover object-center rounder-lg">
            </div>
            <div class="flex flex-wrap absolute justify-center left-0 right-0 bottom-0 pl-30 pt-3 pb-3 pr-3">
                <div class="block rounded-full border-4 absolute left-6 bottom-4">
                    <span class="w-full h-full">
                        <div class="">
                            <img :src="pic" class="block object-cover relative w-full h-full rounded-full">
                        </div>
                    </span>
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
