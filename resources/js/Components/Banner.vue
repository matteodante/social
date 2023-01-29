<script setup>
import { computed, ref, watch } from 'vue';
import { usePage } from '@inertiajs/vue3';
import { MegaphoneIcon, XMarkIcon, SunIcon } from '@heroicons/vue/24/outline'

const show = ref(true);
const style = computed(() => usePage().props.jetstream.flash?.bannerStyle || 'success');
const message = computed(() => usePage().props.jetstream.flash?.banner || '');

watch(message, async () => {
    show.value = true;
});

const accept = () => {
    show.value = false;
}

</script>

<template>
    <div v-if="show && message">
        <div :class="{ 'bg-light-500': style == 'success', 'bg-red-700': style == 'danger' }">
            <div class="mx-auto py-2 px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between flex-wrap">
                    <div class="w-0 flex-1 flex items-center min-w-0">
                        <span class="flex p-2 rounded-lg"
                            :class="{ 'bg-light-500': style == 'success', 'bg-red-600': style == 'danger' }">
                            <MegaphoneIcon v-if="style == 'danger'" class="h-5 w-5 text-white" aria-hidden="true" />
                            <SunIcon v-if="style == 'success'" class="h-5 w-5 text-white" aria-hidden="true" />
                        </span>

                        <p class="ml-3 font-medium text-sm text-white truncate">
                            {{ message }}
                        </p>
                    </div>

                    <div class="shrink-0 sm:ml-3">
                        <button type="button" class="-mr-1 flex p-2 rounded-md focus:outline-none sm:-mr-2 transition"
                            :class="{ 'hover:bg-light-500 focus:bg-light-800': style == 'success', 'hover:bg-red-600 focus:bg-red-600': style == 'danger' }"
                            aria-label="Dismiss" @click.prevent="accept">
                            <XMarkIcon class="h-5 w-5 text-white" fill="none" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>



<!-- <template>
    <div v-if="show && message" :class="{ 'bg-indigo-500': style == 'success', 'bg-red-700': style == 'danger' }">
        <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-between">
                <div class="flex w-0 flex-1 items-center">
                    <span class="flex rounded-lg bg-indigo-800 p-2">
                        <MegaphoneIcon class="h-6 w-6 text-white" aria-hidden="true" />
                    </span>
                    <p class="ml-3 truncate font-medium text-white">
                        <span class="md:hidden">{{ message }}</span>
                        <span class="hidden md:inline">{{ message }}</span>
                    </p>
                </div>
                <div class="order-3 mt-2 w-full flex-shrink-0 sm:order-2 sm:mt-0 sm:w-auto">
                    <a href="#"
                        class="flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-2 text-sm font-medium text-indigo-600 shadow-sm hover:bg-indigo-50">Learn
                        more</a>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button type="button"
                        :class="{ 'hover:bg-indigo-600 focus:bg-indigo-600': style == 'success', 'hover:bg-red-600 focus:bg-red-600': style == 'danger' }"
                        aria-label="Dismiss" @click.prevent="show = false"
                        class="-mr-1 flex rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                        <span class="sr-only">Dismiss</span>
                        <XMarkIcon class="h-6 w-6 text-white" aria-hidden="true" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</template> -->

