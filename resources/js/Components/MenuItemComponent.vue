<template>
    <div
        class="w-full flex items-center justify-start hover:bg-gray-900 p-2 px-4 lg:pr-6 rounded-lg cursor-pointer transition duration-200 ease-in-out"
        :class="{ 'bg-mainColor hover:bg-mainColor': active }"
    >
        <component
            :is="icon"
            :fillColor="[active ? '#3b82fc' : '#fff']"
            :size="30"
        />
        <span
            class="lg:block hidden text-white font-extrabold text-2xl pl-4 mt-0.5"
            :class="{ '!text-blue-500': active }"
        >
            {{ iconString }}
        </span>
    </div>
</template>

<script setup>
import { toRefs } from "vue";
import Home from "vue-material-design-icons/Home.vue";
import PoundBox from "vue-material-design-icons/PoundBox.vue";
import BellOutline from "vue-material-design-icons/BellOutline.vue";
import EmailOutline from "vue-material-design-icons/EmailOutline.vue";
import AccountOutline from "vue-material-design-icons/AccountOutline.vue";

const props = defineProps({
    iconString: {
        type: String,
    },
    active: {
        type: Boolean,
        default: false,
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
