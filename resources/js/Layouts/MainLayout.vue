<template>
    <div class="fixed w-full mx-auto">
        <div class="max-w-[1400px] flex mx-auto">
            <div
                class="lg:w-3/12 w-[60px] h-screen max-w-[350px] lg:px-4 lg:mx-auto"
            >
                <div class="p-2 px-3 mb-4">
                    <Twitter fillColor="#fff" :size="37" />
                </div>

                <MenuItemComponent iconString="Home" />
                <MenuItemComponent iconString="Explore" />
                <MenuItemComponent iconString="Notifications" />
                <MenuItemComponent iconString="Messages" />
                <MenuItemComponent iconString="Profile" />

                <button
                    @click="createTweet = true"
                    class="lg:w-full mt-8 ml-2 text-white font-extrabold text-xl bg-[#1c9cef] p-3 px-3 rounded-full cursor-pointer"
                >
                    <span class="lg:block hidden">Tweet</span>
                    <span class="block lg:hidden">
                        <Feather fillColor="#fff" :size="20" />
                    </span>
                </button>
            </div>

            <div class="lg:w-7/12 w-11/12 border-x border-gray-800 relative">
                <div
                    class="bg-black bg-opacity-50 backdrop-blur-md z-10 absolute w-full"
                >
                    <div class="border-gray-800 border-b w-full">
                        <div
                            class="w-full text-white text--xl font-extrabold p-4"
                        >
                            Home
                        </div>
                        <div class="flex">
                            <div
                                @click="isForYou = true"
                                class="flex items-center justify-center w-full h-[60px] text-gray-500 text-lg font-extrabold p-4 hover:bg-gray-500 hover:bg-opacity-30 cursor-pointer transition duration-200 ease-in-out"
                                :class="{ 'text-gray-500': isForYou }"
                            >
                                <div
                                    class="inline-block text-center border-b-4 border-transparent h-[60px]"
                                    :class="{
                                        'border-b-[#1c9cef] text-white':
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
                                        'border-b-[#1c9cef] text-white':
                                            !isForYou,
                                    }"
                                >
                                    <div class="my-auto mt-4">Following</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="absolute top-0 z-0 h-full overflow-auto scrollbar-hide"
                >
                    <div class="mt-[126px]" />
                    <slot />
                    <div class="pb-4" />
                </div>
            </div>

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
        <div class="md:max-w-2xl md:mx-auto md:mt-10 md:rounded-xl bg-black">
            <div
                class="flex items-center justify-between md:inline-block p-2 m-2 rounded-full cursor-pointer"
            >
                <div
                    @click="closeMessageBox()"
                    class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer"
                >
                    <Close
                        fillColor="#fff"
                        :size="28"
                        class="md:block hidden"
                    />
                    <ArrowLeft fillColor="#fff" :size="28" class="md:hidden" />
                </div>

                <button
                    @click="addTweet()"
                    :disabled="!tweet"
                    class="md:hidden font-extrabold text-base p-1.5 px-4 rounded-full cursor-pointer"
                    :class="
                        tweet
                            ? 'bg-[#1c9cef] text-white'
                            : 'bg-[#124d77] text-gray-400'
                    "
                >
                    Tweet
                </button>
            </div>

            <div class="w-full flex">
                <div class="ml-3.5 mr-2">
                    <img class="rounded-full w-[55px]" :src="randImg" alt="" />
                </div>
                <div class="w-[calc(100%-100px)]">
                    <div class="inline-block w-full">
                        <div
                            class="flex items-center border border-gray-700 rounded-full"
                        >
                            <span class="text-[#1c9cef] pl-3.5 font-extrabold">
                                Everyone
                            </span>
                            <ChevronDown
                                class="pr-2"
                                fillColor="#1c9cef"
                                :size="25"
                            />
                        </div>
                        <div>
                            <textarea
                                @input="textareaInput"
                                cols="30"
                                rows="4"
                                placeholder="What's happening?"
                                ref="textarea"
                                class="w-full bg-black mt-2 focus:ring-0 text-white text-xl font-extrabold min-h-[120px]"
                            ></textarea>
                        </div>
                        <div class="w-full">
                            <video
                                v-if="uploadType === 'mp4'"
                                :src="showUpload"
                                controls
                                class="rounded-xl overflow-auto"
                            ></video>
                            <img
                                v-else
                                :src="showUpload"
                                class="rounded-xl min-w-full"
                                alt=""
                            />
                        </div>
                        <div
                            class="flex py-2 items-center text-[#1c9cef] font-extrabold"
                        >
                            <Earth fillColor="#1c9cef" :size="20" />
                            <span class="pl-2">Everyone can reply</span>
                        </div>
                        <div class="border-b border-gray-700" />
                        <div class="flex items-center justify-between py-2">
                            <div class="flex items-center">
                                <div
                                    class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer"
                                >
                                    <label
                                        for="fileUpload"
                                        class="cursor-pointer"
                                    >
                                        <ImageOutline
                                            fillColor="#1c9cef"
                                            :size="25"
                                        />
                                    </label>
                                    <input
                                        type="file"
                                        id="fileUpload"
                                        hidden
                                        @change="getFile"
                                        accept="image/*,video/*"
                                    />
                                </div>
                                <div
                                    class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer"
                                >
                                    <FileGifBox
                                        fillColor="#1c9cef"
                                        :size="25"
                                    />
                                </div>
                                <div
                                    class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer"
                                >
                                    <Emoticon fillColor="#1c9cef" :size="25" />
                                </div>
                            </div>
                            <button
                                @click="addTweet()"
                                :disabled="!tweet"
                                class="hidden md:block font-extrabold text-base p-1.5 px-4 rounded-full cursor-pointer"
                                :class="
                                    tweet
                                        ? 'bg-[#1c9cef] text-white'
                                        : 'bg-[#124d77] text-gray-400'
                                "
                            >
                                Tweet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";
import Twitter from "vue-material-design-icons/Twitter.vue";
import Magnify from "vue-material-design-icons/Magnify.vue";
import DotsHorizontal from "vue-material-design-icons/DotsHorizontal.vue";
import Feather from "vue-material-design-icons/Feather.vue";
import Close from "vue-material-design-icons/Close.vue";
import ChevronDown from "vue-material-design-icons/ChevronDown.vue";
import Earth from "vue-material-design-icons/Earth.vue";
import ImageOutline from "vue-material-design-icons/ImageOutline.vue";
import FileGifBox from "vue-material-design-icons/FileGifBox.vue";
import Emoticon from "vue-material-design-icons/Emoticon.vue";
import ArrowLeft from "vue-material-design-icons/ArrowLeft.vue";
import MenuItemComponent from "@/Components/MenuItemComponent.vue";

const isForYou = ref(true);
const tweet = ref("");
const textarea = ref(null);
const createTweet = ref(false);
const randImg = ref(
    `https://picsum.photos/id/${(Math.random() * 200).toFixed(0)}/100`
);
const randImg2 = ref(
    `https://picsum.photos/id/${(Math.random() * 200).toFixed(0)}/100`
);
const file = ref(null);
const showUpload = ref("");
const uploadType = ref("");

const textareaInput = (e) => {
    tweet.value = e.target.value;
    textarea.value.style.height = "auto";
    textarea.value.style.height = `${e.target.scrollHeight}px`;
};

const getFile = (e) => {
    file.value = e.target.files[0];
    showUpload.value = URL.createObjectURL(file.value);
    uploadType.value = file.value.name.split(".").pop();
};

const closeMessageBox = () => {
    createTweet.value = false;
    tweet.value = "";
    showUpload.value = "";
    uploadType.value = "";
};

const addTweet = () => {
    if (!tweet.value) return;

    let data = new FormData();
    data.append("tweet", tweet.value);
    data.append("file", file.value);
    router.post("/tweets", data);
    closeMessageBox();
};
</script>

<style>
body {
    background: black;
}
</style>
