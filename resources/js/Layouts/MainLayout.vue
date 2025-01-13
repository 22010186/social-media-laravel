<template>
    <div class="fixed w-full mx-auto">
        <div class="max-w-[1400px] flex mx-auto">
            <!-- Left sidebar -->
            <div
                class="lg:w-3/12 w-[60px] h-screen max-w-[350px] lg:px-4 lg:mx-auto"
            >
                <div class="p-2 px-3 mb-4 flex items-center justify-center">
                    <div class="w-40">
                        <ApplicationLogo />
                    </div>
                </div>

                <MenuItemComponent iconString="Home" :active="true" />
                <MenuItemComponent iconString="Explore" />
                <MenuItemComponent iconString="Notifications" />
                <MenuItemComponent iconString="Messages" />
                <Link href="/profile">
                    <MenuItemComponent iconString="Profile" />
                </Link>

                <button
                    @click="handleOpenCreateTweetOverlay()"
                    class="lg:w-full mt-8 ml-2 text-white font-extrabold text-xl bg-mainColor p-3 px-3 rounded-full cursor-pointer"
                >
                    <span class="lg:block hidden">Tweet</span>
                    <span class="block lg:hidden">
                        <Feather fillColor="#fff" :size="20" />
                    </span>
                </button>
            </div>

            <!-- Main section -->
            <div class="lg:w-7/12 w-11/12 border-x border-gray-800 relative">
                <div
                    class="bg-black bg-opacity-50 backdrop-blur-md z-10 absolute w-full"
                >
                    <div class="border-gray-800 border-b w-full">
                        <div
                            class="w-full text-white text--xl font-extrabold p-4"
                        />

                        <div class="flex">
                            <div
                                @click="isForYou = true"
                                class="flex items-center justify-center w-full h-[60px] text-gray-500 text-lg font-extrabold p-4 hover:bg-gray-500 hover:bg-opacity-30 cursor-pointer transition duration-200 ease-in-out"
                                :class="{ 'text-gray-500': isForYou }"
                            >
                                <div
                                    class="inline-block text-center border-b-4 border-transparent h-[60px]"
                                    :class="{
                                        'border-b-mainColor text-white':
                                            isForYou,
                                    }"
                                >
                                    <div class="my-auto mt-4">For you</div>
                                </div>
                            </div>
                            <div
                                @click="isForYou = false"
                                class="flex items-center justify-center w-full h-[60px] text-gray-500 text-lg font-extrabold p-4 hover:bg-gray-500 hover:bg-opacity-30 cursor-pointer transition duration-200 ease-in-out"
                                :class="{ 'text-gray-500': !isForYou }"
                            >
                                <div
                                    class="inline-block text-center border-b-4 border-transparent h-[60px]"
                                    :class="{
                                        'border-b-mainColor text-white':
                                            !isForYou,
                                    }"
                                >
                                    <div class="my-auto mt-4">Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <main
                    class="absolute top-0 z-0 h-full w-full overflow-auto scrollbar-hide"
                >
                    <div class="mt-[126px]" />
                    <slot />
                    <div class="pb-4" />
                </main>
            </div>

            <!-- Right sidebar -->
            <div
                class="lg:block hidden lg:w-4/12 h-screen border-l border-gray-800 pl-4"
            >
                <div
                    class="w-full p-1 mt-2 px-4 lg:flex items-center rounded-full hidden bg-[#212327]"
                >
                    <Magnify fillColor="#5e5c5c" :size="25" />
                    <input
                        type="text"
                        class="appearance-none w-full border-none py-2 bg-[#212327] text-gray-100 placeholder-gray-500 leading-tight focus:ring-0"
                        placeholder="Search"
                    />
                </div>
                <div
                    class="w-full mt-4 rounded-lg lg:block hidden bg-[#212327]"
                >
                    <div
                        class="w-full p-4 text-white font-extrabold mb-6 text-xl"
                    >
                        What's happening
                    </div>
                    <div
                        class="h-[80px] hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out"
                    >
                        <div class="flex p-3 justify-between h-[80px] px-3">
                            <div>
                                <div class="text-sm text-gray-400">
                                    Tennis Tournament LIVE
                                </div>
                                <div
                                    class="w-full text-white font-extrabold mb-6 text-base"
                                >
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                            </div>
                            <img
                                :src="randImg2"
                                class="rounded-full object-contain"
                                alt=""
                            />
                        </div>
                    </div>
                    <div
                        class="hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out"
                    >
                        <div class="flex p-3 justify-between">
                            <div>
                                <div class="text-sm text-gray-400">
                                    Trending
                                </div>
                                <div
                                    class="w-full text-white font-extrabold mb-6 text-base"
                                >
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="text-sm text-gray-400">
                                    40,731 Views
                                </div>
                            </div>
                            <DotsHorizontal fillColor="#fff" :size="20" />
                        </div>
                    </div>
                    <div
                        class="hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out"
                    >
                        <div class="flex p-3 justify-between">
                            <div>
                                <div class="text-sm text-gray-400">
                                    Trending
                                </div>
                                <div
                                    class="w-full text-white font-extrabold mb-6 text-base"
                                >
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="text-sm text-gray-400">
                                    40,731 Views
                                </div>
                            </div>
                            <DotsHorizontal fillColor="#fff" :size="20" />
                        </div>
                    </div>
                    <div
                        class="hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out"
                    >
                        <div class="flex p-3 justify-between">
                            <div>
                                <div class="text-sm text-gray-400">
                                    Trending
                                </div>
                                <div
                                    class="w-full text-white font-extrabold mb-6 text-base"
                                >
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="text-sm text-gray-400">
                                    40,731 Views
                                </div>
                            </div>
                            <DotsHorizontal fillColor="#fff" :size="20" />
                        </div>
                    </div>
                    <div
                        class="hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out"
                    >
                        <div class="flex p-3 justify-between">
                            <div>
                                <div class="text-sm text-gray-400">
                                    Trending
                                </div>
                                <div
                                    class="w-full text-white font-extrabold mb-6 text-base"
                                >
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="text-sm text-gray-400">
                                    40,731 Views
                                </div>
                            </div>
                            <DotsHorizontal fillColor="#fff" :size="20" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        v-if="createTweet"
        id="OverLaySection"
        class="fixed top-0 left-0 w-full h-screen bg-black md:bg-gray-400 md:bg-opacity-30 md:p-3"
    >
        <CreateTweetOverlay @close="createTweet = false" />
    </div>
</template>

<script setup>
import { ref } from "vue";
import { usePage, router, Link } from "@inertiajs/vue3";
import Magnify from "vue-material-design-icons/Magnify.vue";
import DotsHorizontal from "vue-material-design-icons/DotsHorizontal.vue";
import Feather from "vue-material-design-icons/Feather.vue";

import MenuItemComponent from "@/Components/MenuItemComponent.vue";
import CreateTweetOverlay from "@/Components/CreateTweetOverlay.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

const isForYou = ref(true);
const createTweet = ref(false);
const auth = usePage().props.auth;

const randImg2 = ref(
    `https://picsum.photos/id/${(Math.random() * 200).toFixed(0)}/100`
);

function handleOpenCreateTweetOverlay() {
    if (!auth.user) return router.visit("/login");
    createTweet.value = true;
}
</script>

<style>
body {
    background: black;
}

.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
</style>
