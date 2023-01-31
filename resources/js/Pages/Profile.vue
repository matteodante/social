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
import ProfileBack from '@/Components/ProfileBack.vue';
import ProfileInfo from '@/Components/ProfileInfo.vue';
</script>

<template>
    <HomeLayout title="Profile">

        <div class="flex justify-start">
            <ProfileBack />
        </div>
        <div>
            <ProfileCover />
            <div class="p-4">
                <div class="relative flex w-full">
                    <!-- Avatar -->
                    <div class="flex flex-1">
                        <div style="margin-top: -6rem;">
                            <div style="height:9rem; width:9rem;" class="md rounded-full relative avatar">
                                <img style="height:9rem; width:9rem;"
                                    class="md rounded-full relative border-4 border-gray-900"
                                    src="https://pbs.twimg.com/profile_images/1254779846615420930/7I4kP65u_400x400.jpg"
                                    alt="">
                                <div class="absolute"></div>
                            </div>
                        </div>
                    </div>
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
        </div>



    </HomeLayout>
</template>
