<script setup>


</script>

<template>
    <!--right menu-->

    <div class="relative max-w-sm mt-3 ml-4 pb-0 mr-20">
        <SearchBar />
    </div>



    <div class="max-w-sm rounded-lg overflow-hidden m-4 mr-20 bg-white border border-opacity-50 border-smoky">
        <WhoToFollowWidget :hover="true" />
    </div>


    <div
        class="max-w-sm rounded-lg overflow-hidden m-4 mr-20 bg-bittersweet bg-opacity-50 border border-opacity-50 border-smoky">
        <TrendingWidget />
    </div>



    <div class="m-6 flow-root">
        <div class="flex-1">
            <a href="#">
                <p class="text-sm leading-6 font-medium text-gray-500">Terms Privacy Policy Cookies Imprint
                    Ads info</p>
            </a>
        </div>
        <div class="flex-2">
            <p class="text-sm leading-6 font-medium text-gray-600"> © 2020 Twitter, Inc.</p>
        </div>
    </div>
</template>
