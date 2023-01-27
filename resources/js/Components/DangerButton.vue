<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type"
        class=" w-48 mt-5  text-white font-bold py-2 px-4 rounded-full items-center justify-center bg-red-600 border border-transparent text-xs  uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
        <slot />
    </button>
</template>
