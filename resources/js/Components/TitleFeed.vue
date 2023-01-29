<script setup>
const { title } = defineProps({
    title: String
})
</script>

<template>
    <div class="flex mb-2">
        <div class="flex-1 mt-2">
            <h2 class="px-4 py-2 text-xl font-semibold text-white">{{ title }}</h2>
        </div>
        <div class="flex-1 px-4 py-2 m-2">

        </div>
    </div>
</template>
