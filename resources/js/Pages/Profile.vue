<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
import { PlusIcon } from '@heroicons/vue/24/outline'
import { ref } from 'vue';
</script>

<script>
export default {
    layout: (h, page) => h(HomeLayout, { title: 'Profile' }, () => page)
}

const follow = ref(false);

const ToggleFollow = () => {
    follow.value = !follow.value
}

</script>

<template>
    <div>
        <ProfileCover />
        <div class="p-4 border-arrow">
            <div class="relative flex w-full">
                <!-- Avatar -->
                <ProfileAvatar />
                <!-- Follow Button -->
                <div class="flex flex-col text-right">
                    <PrimaryButton class="w-32" @click="ToggleFollow">
                        {{ follow ? 'Unfollow' : 'Follow' }}
                    </PrimaryButton>
                </div>
            </div>

            <!-- Profile info -->
            <ProfileInfo />
        </div>

        <!--<ProfilePostOrSelling />-->


    </div>
</template>
