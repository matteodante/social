<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { PlusIcon } from '@heroicons/vue/24/outline'
const props = defineProps({

})
</script>

<template>
    <div class="flex">
        <div class="flex-1 px-2 pt-2 mt-2">

            <textarea class="border-0 bg-transparent text-white font-medium text-lg w-full focus:ring-black" rows="3"
                cols="50" placeholder="What's happening?"></textarea>
        </div>
    </div>
    <!--middle creat tweet below icons-->
    <div class="flex">
        <div class="w-10"></div>

        <div class="w-64 p-2">

            <div class="flex items-center">
                <div class=" text-center px-2 m-2">
                    <a href="#"
                        class="mt-1 group flex items-center text-light-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-light-800 hover:text-light-300">
                        <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class=" text-center px-2 m-2">
                    <a href="#"
                        class="mt-1 group flex items-center text-light-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-light-800 hover:text-light-300">
                        <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                            </path>
                            <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </a>
                </div>

                <div class=" text-center px-2 m-2">
                    <a href="#"
                        class="mt-1 group flex items-center text-light-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-light-800 hover:text-light-300">
                        <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </a>
                </div>



            </div>
        </div>

        <div class="flex-1">
            <PrimaryButton class="float-right mr-8 w-32">
                <span class="absolute left-2 top-1/2 translate-y-1/2">
                    <PlusIcon />
                </span>
                <span>Post</span>
            </PrimaryButton>
        </div>
    </div>
</template>
