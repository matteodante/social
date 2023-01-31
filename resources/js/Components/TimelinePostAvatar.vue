<script setup>
const { name, username, date } = defineProps({
    name: String,
    username: String,
    date: { type: Date, required: false },
    img: String,
})
</script>

<template>
    <div class="flex flex-row p-4">
        <a href="#" class="flex-1 group block">
            <div class="flex items-center">
                <div>
                    <img class="inline-block h-10 w-10 rounded-full"
                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                </div>
                <div class="ml-2">
                    <div>
                        <p class="text-base leading-6 font-medium text-white">
                            Sonali Hirave
                        </p>
                    </div>
                    <div>
                        <p
                            class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                            @ShonaDesign
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <div class="flex-1 group block content-center">

        </div>
    </div>
</template>
