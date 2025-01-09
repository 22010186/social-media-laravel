<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gray-800 pt-6 sm:justify-center sm:pt-0"
    >
        <div class="flex flex-col items-center justify-center">
            <div class="w-full flex items-center justify-center">
                <ApplicationLogo />
            </div>

            <div
                class="mt-6 w-full overflow-hidden shadow-white text-white [&_input]:text-black px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg"
            >
                <slot />
            </div>
        </div>
    </div>
</template>
