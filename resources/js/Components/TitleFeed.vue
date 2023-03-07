<script setup>
const { title } = defineProps({
    title: String
})
</script>

<template>
    <div class="flex pb-2 border-arrow text-smoky">
        <div class="flex-1 mt-2">
            <h2 class="px-4 py-2 text-xl font-semibold ">{{ title }}</h2>
        </div>
        <div class="flex-1 px-4 py-2 m-2">

        </div>
    </div>
</template>
