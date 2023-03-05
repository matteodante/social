<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
import { PlusIcon } from '@heroicons/vue/24/outline'
</script>

<script>
export default {
    layout: (h, page) => h(HomeLayout, { title: 'Profile' }, () => page)
}
</script>

<template>
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

        <ProfilePostOrSelling />


    </div>
</template>
