<script setup>
import { Link } from '@inertiajs/vue3'
const { name, username, date } = defineProps({
    name: String,
    username: String,
    date: { type: String, required: false },
    img: String,
})
</script>

<template>
    <div class="flex flex-row p-4 text-smoky">
        <Link href="/matteodante98" class="flex-1 group block">
        <div class="flex items-center">
            <div>
                <img class="inline-block h-12 w-12 rounded-full"
                    src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
            </div>
            <div class="ml-3">
                <p class="leading-6 font-semibold ">
                    Sonali Hirave
                </p>
                <p class="text-sm leading-5 font-light italic">
                    @ShonaDesign
                </p>
            </div>
        </div>
        </Link>
        <div class="flex-1 text-right align-bottom">
            <p class="leading-6 font-light italic text-xs">
                18m ago
            </p>
        </div>
    </div>
</template>
