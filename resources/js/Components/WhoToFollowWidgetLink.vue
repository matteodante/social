<script setup>
import { Link } from '@inertiajs/vue3'
const { name, username, pic } = defineProps({
    name: String,
    username: String,
    pic: String,
})
</script>

<template>
    <div class="flex flex-shrink-0 hover:bg-gray-800 transition-all">
        <div class="flex-1 ">
            <div class="flex items-center w-48">
                <div>
                    <Link :href="route('dashboard')">
                    <img class="inline-block h-10 w-auto rounded-full ml-4 mt-2" :src="pic" alt="" />
                    </Link>
                </div>
                <div class="ml-3 mt-3">
                    <p class="text-base leading-6 font-medium text-white">
                        {{ name }}
                    </p>
                    <p
                        class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                        @{{ username }}
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-1 px-4 py-2 m-2">
            <a href="" class=" float-right">
                <button
                    class="bg-transparent hover:bg-light-500 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded-full">
                    Follow
                </button>
            </a>

        </div>
    </div>


</template>
