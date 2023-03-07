

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import { PlusIcon } from '@heroicons/vue/24/outline'

</script>

<template>
    <div
        class="flex-shrink-0 flex rounded-full p-4 my-6 mr-2 text-smoky hover:text-bittersweet hover:bg-bittersweet hover:bg-opacity-10 transition-all">
        <SidebarAvatar />
    </div>

    <!--left menu-->
    <nav class="pl-4 pr-2">




        <SidebarLink text="Home" :href="route('dashboard')" active>
            <template #icon>
                <svg class="mr-4 h-8 w-8 " stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6" />
                </svg>
            </template>
        </SidebarLink>

        <SidebarLink text="Explore" :href="route('dashboard')">
            <template #icon>
                <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                </svg>
            </template>
        </SidebarLink>

        <SidebarLink text="Notifications" :href="route('dashboard')">
            <template #icon>
                <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
            </template>
        </SidebarLink>

        <SidebarLink text="Messages" :href="route('dashboard')">
            <template #icon>
                <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </template>
        </SidebarLink>

        <SidebarLink text="For Sale" :href="route('dashboard')">
            <template #icon>
                <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                    </path>
                </svg>
            </template>
        </SidebarLink>

        <SidebarLink text="Profile" :href="route('dashboard')">
            <template #icon>
                <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </template>
        </SidebarLink>

        <SidebarLink text="More" :href="route('dashboard')">
            <template #icon>
                <svg class="mr-4 h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </template>
        </SidebarLink>

        <PrimaryButton class="flex items-center px-2 py-2 w-48 mb-3">
            <PlusIcon class="mr-4 h-8 w-8" />
            <span>New Post</span>
        </PrimaryButton>
    </nav>
</template>
