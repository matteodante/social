<script setup>
import { computed, ref } from 'vue'

const props = defineProps({
    for: String,
    active: { type: Boolean, default: false }
})

const classObject = computed(() => ({
    'text-smoky': !props.active,

    'text-red-600': props.for == 'like' && props.active,
    'hover:text-red-600 hover:bg-red-600': props.for == 'like',

    'text-green-600': props.for == 'comment' && props.active,
    'hover:text-green-600 hover:bg-green-600': props.for == 'comment',

    'text-yellow-600': props.for == 'save' && props.active,
    'hover:text-yellow-600 hover:bg-yellow-600': props.for == 'save'

}))

</script>

<template>
    <div class="text-center m-2 antialiased">
        <button href="#"
            class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:text-bittersweet hover:bg-bittersweet hover:opacity-100 hover:bg-opacity-10 active:bg-opacity-10 active:bg-jet active:text-jet transition-all"
            :class="classObject">
            <slot />
        </button>
    </div>
</template>
