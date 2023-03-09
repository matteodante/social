<script setup>

const { post } = defineProps({
    post: Object,
})


</script>
<template>
    <div class="border-b border-smoky border-opacity-25">

        <TimelinePostAvatar :name="post.user.name" :username="post.user.username" :img="post.user.profile_photo_url"
            :date="post.created_at" />


        <div class="px-4">

            <TimelinePostContent :text="post.content" :media="!!post.media_url" :mediaType="post.media_type"
                :mediaSrc="post.media_url" />


            <div class="flex">
                <div class="w-full">
                    <TimelinePostActions :postID="post.id" :likes="post.likes_count" :comments="post.comments_count"
                        :isLiked="post.isLiked" :isSaved="post.isSaved" />
                </div>
            </div>

        </div>

    </div>
</template>
