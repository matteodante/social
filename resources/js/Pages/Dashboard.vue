<script setup>
import { toRefs } from 'vue';
import HomeLayout from '@/Layouts/HomeLayout.vue';
import { DynamicScroller, DynamicScrollerItem, RecycleScroller } from 'vue-virtual-scroller'

const { posts } = defineProps({
    posts: Object,
});

const { data, next_page_url } = toRefs(posts);

</script>

<script>

export default {
    layout: (h, page) => h(HomeLayout, { title: 'Dashboard' }, () => page)
}

</script>

<template>
    <TitleFeed title="Home" />

    <ShareFeed />

    <DynamicScroller :items="data" :min-item-size="32">
        <template v-slot="{ item, index, active }">
            <DynamicScrollerItem :item="item" :active="active" :size-dependencies="[item.content]" :data-index="item.id"
                class="transition-all">
                <TimelinePost :post="item" />
            </DynamicScrollerItem>
        </template>
    </DynamicScroller>
</template>
