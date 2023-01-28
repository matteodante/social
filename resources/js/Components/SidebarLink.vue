<template>
    <Link :href="href"
        class="group flex items-center px-2 py-2 text-xl leading-6 font-normal rounded-full hover:bg-gray-900 mb-3">
    <slot name="icon" />
    {{ text }}
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const { href, text } = defineProps({
    href: String,
    text: String,
})

</script>
