<script setup>
import { ref, onMounted } from "vue";
import { Head, router } from "@inertiajs/vue3";
defineProps({
    title: String,
});

const isShowing = ref(true)


const showingNavigationDropdown = ref(false);

const logout = () => {
    router.post(route("logout"));
};

//flowbite
onMounted(() => {
    console.log('Layout mounted');
});
</script>


<template>
    <Head :title="title" />
    <Banner />

    <div class="bg-white isolate font-sans">


        <NavbarMobile />
        <!-- MAIN LG -->

        <div class="flex">

            <div class="w-2/5 pl-32 py-4 h-screen sticky top-0 hidden lg:block overflow-hidden">
                <LeftSidebar />
            </div>

            <Transition name="page" mode="out-in" appear>
                <main :key="$page.url" class="w-screen lg:w-3/5 h-auto border-t-0 ">
                    <slot />
                </main>
            </Transition>


            <div class="w-2/5 hidden xl:block h-auto ">
                <RightSidebar />
            </div>



        </div>
    </div>
</template>



<style>
.page-enter-active,
.page-leave-active {
    transition: opacity 0.1s ease;
}

.page-enter,
.page-leave-to {
    opacity: 0;
}
</style>
