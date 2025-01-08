<script setup>
import { Head, usePage } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import Tweet from "@/Components/Tweet.vue";

defineProps({
    tweets: Array,
});

// defineProps({
//     canLogin: {
//         type: Boolean,
//     },
//     canRegister: {
//         type: Boolean,
//     },
//     laravelVersion: {
//         type: String,
//         required: true,
//     },
//     phpVersion: {
//         type: String,
//         required: true,
//     },
// });
</script>

<template>
    <Head title="Welcome" />
    <MainLayout>
        <div class="text-white">
            <div class="flex" v-for="tweet in tweets">
                <Tweet :tweet="tweet" />
            </div>
            <div class="border-b border-b-gray-800 mt-2"></div>
        </div>
    </MainLayout>
</template>
