<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Timeline from '@/Components/Timeline.vue';
import HomeLayout from '@/Layouts/HomeLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { PlusIcon } from '@heroicons/vue/24/outline'
import TitleFeed from '@/Components/TitleFeed.vue';
import ShareFeed from '@/Components/ShareFeed.vue';
import TimelinePost from '@/Components/TimelinePost.vue';
import ProfileCover from '@/Components/ProfileCover.vue';
import ProfileInfo from '@/Components/ProfileInfo.vue';
import ProfileAvatar from '@/Components/ProfileAvatar.vue';
</script>

<template>
    <HomeLayout title="Profile">


        <div>
            <ProfileCover />
            <div class="p-4">
                <div class="relative flex w-full">
                    <!-- Avatar -->
                    <ProfileAvatar />
                    <!-- Follow Button -->
                    <div class="flex flex-col text-right">
                        <PrimaryButton
                            class=" mt-0 max-h-max whitespace-nowrap focus:outline-none  focus:ring max-w-max border bg-transparent">
                            Follow
                        </PrimaryButton>
                    </div>
                </div>

                <!-- Profile info -->
                <ProfileInfo />
            </div>
            <hr class="border-gray-800">
            <TimelinePost />
            <TimelinePost />
            <TimelinePost />
        </div>



    </HomeLayout>
</template>
