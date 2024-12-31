<template>
    <div
        class="w-full flex items-center justify-start hover:bg-gray-900 p-2 px-4 lg:pr-6 rounded-lg cursor-pointer transition duration-200 ease-in-out"
    >
        <component :is="icon" fillColor="#fff" :size="30" />
        <span
            class="lg:block hidden text-white font-extrabold text-2xl pl-4 mt-0.5"
        >
            {{ iconString }}
        </span>
    </div>
</template>

<script setup>
import { toRefs, ref } from "vue";
import Home from "vue-material-design-icons/Home.vue";
import PoundBox from "vue-material-design-icons/PoundBox.vue";
import BellOutline from "vue-material-design-icons/BellOutline.vue";
import EmailOutline from "vue-material-design-icons/EmailOutline.vue";
import AccountOutline from "vue-material-design-icons/AccountOutline.vue";

const props = defineProps({
    iconString: {
        type: String,
    },
});

const { iconString } = toRefs(props);
let icon = null;

if (iconString.value == "Home") icon = Home;
if (iconString.value == "Explore") icon = PoundBox;
if (iconString.value == "Notifications") icon = BellOutline;
if (iconString.value == "Messages") icon = EmailOutline;
if (iconString.value == "Profile") icon = AccountOutline;
</script>

<style scoped></style>
