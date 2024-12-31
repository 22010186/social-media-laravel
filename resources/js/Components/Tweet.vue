<template>
    <div class="min-w-[60px]">
        <img
            :src="tweet?.image"
            class="rounded-full m-2 mt-3 w-[50px]"
            alt=""
        />
    </div>
    <div class="p-2 w-full">
        <div
            class="font-extrabold flex items-center justify-between mt-0.5 mb-1.5"
        >
            <div class="flex items-center">
                <p>{{ tweet?.name }}</p>
                <span class="font-light text-sm text-gray-500 pl-2">{{
                    tweet?.handle
                }}</span>
            </div>
            <div class="hover:bg-gray-800 rounded-full cursor-pointer relative">
                <button>
                    <DotsHorizontal
                        fillColor="#fff"
                        @click="openOptions = !openOptions"
                    />
                </button>
                <div
                    v-if="openOptions"
                    class="absolute mt-1 p-3 right-0 w-[300px] bg-black border border-gray-700 rounded-lg shadow-lg"
                >
                    <Link
                        as="button"
                        method="delete"
                        :href="`/tweets/${tweet.id}`"
                        class="flex items-center cursor-pointer"
                    >
                        <TrashCanOutline fillColor="#dc2626" :size="18" />
                        <p class="ml-2 text-red-600 font-extrabold">
                            Delete Tweet
                        </p>
                    </Link>
                </div>
            </div>
        </div>

        <div class="pb-3">{{ tweet?.tweet }}</div>

        <div v-if="tweet && tweet.file">
            <div v-if="!tweet.isVideo" class="rounded-xl">
                <img
                    :src="tweet.file"
                    class="mt-2 object-fill rounded-xl w-full"
                    alt=""
                />
            </div>
            <div v-else>
                <video
                    :src="tweet.file"
                    class="mt-2 object-fill rounded-xl w-full"
                    controls
                ></video>
            </div>
        </div>

        <div class="flex items-center justify-between mt-4 w-4/5">
            <div class="flex items-center">
                <MessageOutline fillColor="#5e5c5c" :size="18" />
                <span class="text-xs font-extrabold text-[#5e5c5c] ml-3">{{
                    tweet?.comments
                }}</span>
            </div>
            <div class="flex items-center">
                <Sync fillColor="#5e5c5c" :size="18" />
                <span class="text-xs font-extrabold text-[#5e5c5c] ml-3">{{
                    tweet?.retweets
                }}</span>
            </div>
            <div class="flex items-center">
                <HeartOutline fillColor="#5e5c5c" :size="18" />
                <span class="text-xs font-extrabold text-[#5e5c5c] ml-3">{{
                    tweet?.likes
                }}</span>
            </div>
            <div class="flex items-center">
                <ChartBar fillColor="#5e5c5c" :size="18" />
                <span class="text-xs font-extrabold text-[#5e5c5c] ml-3">{{
                    tweet?.analytics
                }}</span>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted, ref } from "vue";
import { Link } from "@inertiajs/vue3";
import HeartOutline from "vue-material-design-icons/HeartOutline.vue";
import ChartBar from "vue-material-design-icons/ChartBar.vue";
import MessageOutline from "vue-material-design-icons/MessageOutline.vue";
import Sync from "vue-material-design-icons/Sync.vue";
import DotsHorizontal from "vue-material-design-icons/DotsHorizontal.vue";
import TrashCanOutline from "vue-material-design-icons/TrashCanOutline.vue";

defineProps({
    tweet: Object,
});

const openOptions = ref(false);

onMounted(() => {});
</script>
