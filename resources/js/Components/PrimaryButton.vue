<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type"
        class="bg-bittersweet mt-5 hover:bg-opacity-50 text-white font-bold py-2 px-4 rounded-full active:bg-smoky focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
        <slot />
    </button>
</template>
