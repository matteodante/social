<template>
    <Link :href="route('profile.show')" class="flex-shrink-0 group block ">
    <div class="flex items-center ">
        <div>
            <img class="inline-block h-12 w-12 rounded-full"
                src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
        </div>
        <div class="ml-3">
            <p class="text-xl leading-6 font-bold ">
                Sonali Hirave
            </p>
            <p class="text-sm leading-5 font-light italic">
                @ShonaDesign
            </p>
        </div>
    </div>
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue';
</script>
