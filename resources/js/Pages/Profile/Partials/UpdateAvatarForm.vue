<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { router, useForm, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

const auth = usePage().props.auth;

const form = useForm({
    image: null,
});

const fileDisplay = ref(null);

const onChange = (e) => {
    fileDisplay.value = URL.createObjectURL(e.target.files[0]);
    form.image = e.target.files[0];
};

const onDrop = (e) => {
    fileDisplay.value = URL.createObjectURL(e.dataTransfer.files[0]);
    form.image = e.dataTransfer.files[0];
};

const updateAvatar = () => {
    form.post(route("avatar"), {
        onSuccess: () => console.log("avatar updated"),
    });
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Update Your Avatar
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile image.
            </p>
        </header>

        <form @submit.prevent="updateAvatar" class="mt-6 space-y-6">
            <div class="w-full">
                <img
                    :src="fileDisplay ?? auth.user.avatar"
                    class="w-40 h-40 rounded-full my-4 mx-auto object-cover"
                    alt=""
                />
            </div>

            <input
                type="file"
                accept="image/*"
                hidden
                id="profileImage"
                @input="onChange($event)"
            />
            <label
                for="profileImage"
                @drop.prevent="onDrop($event)"
                @dragover.prevent=""
            >
                <div
                    class="border-dashed border-2 border-gray-200 h-40 flex flex-col items-center justify-center cursor-pointer"
                >
                    <p class="text-gray-400 font-extrabold text-lg">
                        Drag and Drop
                    </p>
                    <p class="text-gray-400 font-extrabold text-lg">Or</p>
                    <p class="text-gray-400 font-extrabold text-lg">
                        Click here to upload
                    </p>
                </div>
            </label>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="!fileDisplay">Save</PrimaryButton>
                <!--
                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600"
                    >
                        Saved.
                    </p>
                </Transition> -->
            </div>
        </form>
    </section>
</template>
