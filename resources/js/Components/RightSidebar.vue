<script setup>


</script>

<template>
    <!--right menu-->

    <div class="relative max-w-sm mt-3 ml-4 pb-0 mr-20">
        <SearchBar />
    </div>



    <div class="max-w-sm rounded-lg overflow-hidden m-4 mr-20 bg-white border-tot">
        <WhoToFollowWidget :hover="true" />
    </div>


    <div class="max-w-sm rounded-lg overflow-hidden m-4 mr-20 bg-bittersweet bg-opacity-50 border-tot">
        <TrendingWidget />
    </div>



    <div class="m-6 flow-root">
        <div class="flex-1">
            <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                <a target="_blank" :href="route('terms.show')" class="text-sm leading-6 font-medium text-gray-500">Terms of
                    Service</a> and <a target="_blank" :href="route('policy.show')"
                    class="text-sm leading-6 font-medium text-gray-500">Privacy Policy</a>
            </div>
        </div>
        <div class="flex-2">
            <p class="text-sm leading-6 font-medium text-gray-600"> © 2023 Social, Inc.</p>
        </div>
    </div>
</template>
