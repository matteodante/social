<script setup>
import TimelinePostAvatar from '@/Components/TimelinePostAvatar.vue';
import TimelinePostActions from '@/Components/TimelinePostActions.vue';
import TimelinePostContent from '@/Components/TimelinePostContent.vue';

</script>
<template>
    <div class="hover:bg-gray-900 transition-all">

        <TimelinePostAvatar />


        <div class="pl-16">

            <TimelinePostContent />


            <div class="flex">
                <div class="w-full">
                    <TimelinePostActions />
                </div>
            </div>

        </div>

    </div>

</template>
