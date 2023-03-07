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
        class="bg-jet mt-5 hover:bg-opacity-50 font-light uppercase hover:italic hover:text-jet text-white py-2 px-4 rounded-full active:bg-smoky active:text-white focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ">
        <slot />
    </button>
</template>
