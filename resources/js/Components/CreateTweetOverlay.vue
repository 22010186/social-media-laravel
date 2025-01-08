<template>
    <div class="md:max-w-2xl md:mx-auto md:mt-10 md:rounded-xl bg-black">
        <div
            class="flex items-center justify-between md:inline-block p-2 m-2 rounded-full cursor-pointer"
        >
            <div
                @click="closeMessageBox()"
                class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer"
            >
                <Close fillColor="#fff" :size="28" class="md:block hidden" />
                <ArrowLeft fillColor="#fff" :size="28" class="md:hidden" />
            </div>

            <button
                @click="addTweet()"
                :disabled="!tweet"
                class="md:hidden font-extrabold text-base p-1.5 px-4 rounded-full cursor-pointer"
                :class="
                    tweet
                        ? 'bg-mainColor text-white'
                        : 'bg-[#124d77] text-gray-400'
                "
            >
                Tweet
            </button>
        </div>

        <div class="w-full flex">
            <div class="ml-3.5 mr-2">
                <img
                    class="rounded-full w-[55px]"
                    :src="auth.user.avatar ?? '/images/avatar.png'"
                    alt=""
                />
            </div>
            <div class="w-[calc(100%-100px)]">
                <div class="inline-block w-full">
                    <div
                        class="flex items-center border border-gray-700 rounded-full"
                    >
                        <span class="text-mainColor pl-3.5 font-extrabold">
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
                            class="rounded-xl overflow-auto w-fit max-h-80"
                        ></video>
                        <img
                            v-else
                            :src="showUpload"
                            class="rounded-xl w-fit max-h-80"
                            alt=""
                        />
                    </div>
                    <div
                        class="flex py-2 items-center text-mainColor font-extrabold"
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
                                <label for="fileUpload" class="cursor-pointer">
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
                                <FileGifBox fillColor="#1c9cef" :size="25" />
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
                                    ? 'bg-mainColor text-white'
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
</template>

<script setup>
import { ref } from "vue";
import { router, usePage } from "@inertiajs/vue3";
import Close from "vue-material-design-icons/Close.vue";
import ChevronDown from "vue-material-design-icons/ChevronDown.vue";
import Earth from "vue-material-design-icons/Earth.vue";
import ImageOutline from "vue-material-design-icons/ImageOutline.vue";
import FileGifBox from "vue-material-design-icons/FileGifBox.vue";
import Emoticon from "vue-material-design-icons/Emoticon.vue";
import ArrowLeft from "vue-material-design-icons/ArrowLeft.vue";

const tweet = ref("");
const textarea = ref(null);
const file = ref(null);
const showUpload = ref("");
const uploadType = ref("");
const auth = usePage().props.auth;

const emits = defineEmits(["close"]);

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
    emits("close");
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
