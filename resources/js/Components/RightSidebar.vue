<script setup>
import SearchBar from '@/Components/SearchBar.vue';
import TrendingWidget from '@/Components/TrendingWidget.vue';
import WhoToFollowWidget from '@/Components/WhoToFollowWidget.vue';

</script>

<template>
    <!--right menu-->

    <div class="relative text-white max-w-sm mt-3 ml-4 pb-0 mr-20">
        <SearchBar />
    </div>



    <div class="max-w-sm rounded-lg  bg-gray-900 overflow-hidden shadow-lg m-4 mr-20">
        <div class="mx-5">
            <WhoToFollowWidget />
        </div>
    </div>


    <div class="max-w-sm rounded-lg bg-gray-900 border-0  overflow-hidden m-4 mr-20">
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
