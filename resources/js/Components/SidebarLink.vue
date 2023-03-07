<template>
    <Link :href="href"
        class="group flex items-center mb-3 px-2 py-2 text-xl leading-6 font-semibold rounded-full text-smoky hover:text-bittersweet hover:bg-bittersweet hover:opacity-100 hover:bg-opacity-10 transition-all"
        :class="active ? '' : 'opacity-50'">
    <slot name="icon" />
    {{ text }}
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const { href, text } = defineProps({
    href: String,
    text: String,
    active: { type: Boolean, default: false }
})

</script>
