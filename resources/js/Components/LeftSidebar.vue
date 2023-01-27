

<script setup>

import PrimaryButton from '@/Components/PrimaryButton.vue';

</script>

<template>
    <!--left menu-->

    <nav class="px-2">

        <a href="#" class="group flex items-center px-2 py-2 mb-5 text-xl leading-6 font-bold rounded-full">
            <svg class="mr-4 h-8 w-8" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 248 204">
                <path fill="currentColor"
                    d="M221.95 51.29c.15 2.17.15 4.34.15 6.53 0 66.73-50.8 143.69-143.69 143.69v-.04c-27.44.04-54.31-7.82-77.41-22.64 3.99.48 8 .72 12.02.73 22.74.02 44.83-7.61 62.72-21.66-21.61-.41-40.56-14.5-47.18-35.07 7.57 1.46 15.37 1.16 22.8-.87-23.56-4.76-40.51-25.46-40.51-49.5v-.64c7.02 3.91 14.88 6.08 22.92 6.32C11.58 63.31 4.74 33.79 18.14 10.71c25.64 31.55 63.47 50.73 104.08 52.76-4.07-17.54 1.49-35.92 14.61-48.25 20.34-19.12 52.33-18.14 71.45 2.19 11.31-2.23 22.15-6.38 32.07-12.26-3.77 11.69-11.66 21.62-22.2 27.93 10.01-1.18 19.79-3.86 29-7.95-6.78 10.16-15.32 19.01-25.2 26.16z" />
            </svg>
        </a>

        <a href="#"
            class="group flex items-center px-2 py-2 text-xl leading-6 font-bold rounded-full hover:bg-gray-900">
            <svg class="mr-4 h-8 w-8 " stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6" />
            </svg>
            Home
        </a>
        <a href="#"
            class="mt-1 group flex items-center px-2 py-2 text-xl leading-6 font-bold rounded-full hover:bg-gray-900 ">
            <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
            </svg>

            Explore
        </a>
        <a href="#"
            class="mt-1 group flex items-center px-2 py-2 text-xl leading-6 font-bold rounded-full hover:bg-gray-900 ">
            <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                </path>
            </svg>
            Notifications
        </a>
        <a href="#"
            class="mt-1 group flex items-center px-2 py-2 text-xl leading-6 font-bold rounded-full hover:bg-gray-900 ">
            <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
            Messages
        </a>
        <a href="#"
            class="mt-1 group flex items-center px-2 py-2 text-xl leading-6 font-bold rounded-full hover:bg-gray-900">
            <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
            </svg>
            Bookmarks
        </a>
        <a href="#"
            class="mt-1 group flex items-center px-2 py-2 text-xl leading-6 font-bold rounded-full hover:bg-gray-900 ">
            <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
            </svg>
            Lists
        </a>
        <a href="#"
            class="mt-1 group flex items-center px-2 py-2 text-xl leading-6 font-bold rounded-full hover:bg-gray-900 ">
            <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            Profile
        </a>
        <a href="#"
            class="mt-1 group flex items-center px-2 py-2 text-xl leading-6 font-bold rounded-full hover:bg-gray-900 ">
            <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            More
        </a>

        <PrimaryButton>
            Tweet
        </PrimaryButton>
    </nav>

    <div class="flex-shrink-0 flex hover:bg-gray-900 rounded-full p-4 mt-12 mr-2">
        <a href="#" class="flex-shrink-0 group block">
            <div class="flex items-center">
                <div>
                    <img class="inline-block h-10 w-10 rounded-full"
                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                </div>
                <div class="ml-3">
                    <p class="text-xl leading-6 font-bold text-white">
                        Sonali Hirave
                    </p>
                    <p
                        class="text-sm leading-5 font-bold text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                        @ShonaDesign
                    </p>
                </div>
            </div>
        </a>
    </div>

</template>
