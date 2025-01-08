<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <form @submit.prevent="submit">
            <div class="p-8 rounded-2xl mx-4">
                <h2 class="text-gray-800 text-center text-2xl font-bold">
                    Sign up
                </h2>
                <div class="mt-8 space-y-4">
                    <div>
                        <label class="text-gray-800 text-sm mb-2 block"
                            >Name</label
                        >
                        <input
                            name="name"
                            v-model="form.name"
                            type="text"
                            class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                            placeholder="Enter name"
                        />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div>
                        <label class="text-gray-800 text-sm mb-2 block"
                            >Email</label
                        >
                        <input
                            name="email"
                            v-model="form.email"
                            type="text"
                            class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                            placeholder="Enter email"
                        />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                    <div>
                        <label class="text-gray-800 text-sm mb-2 block"
                            >Password</label
                        >
                        <input
                            name="password"
                            v-model="form.password"
                            type="password"
                            class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                            placeholder="Enter password"
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.password"
                        />
                    </div>
                    <div>
                        <label class="text-gray-800 text-sm mb-2 block"
                            >Confirm Password</label
                        >
                        <input
                            name="password_confirmation"
                            v-model="form.password_confirmation"
                            type="password"
                            class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                            placeholder="Enter confirm password"
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.password_confirmation"
                        />
                    </div>

                    <div class="flex items-center">
                        <input
                            id="remember-me"
                            name="remember-me"
                            type="checkbox"
                            class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                        />
                        <label
                            for="remember-me"
                            class="text-gray-800 ml-3 block text-sm"
                        >
                            I accept the
                            <a
                                href="javascript:void(0);"
                                class="text-blue-600 font-semibold hover:underline ml-1"
                                >Terms and Conditions</a
                            >
                        </label>
                    </div>
                    <div class="!mt-12">
                        <button
                            :disabled="form.processing"
                            type="submit"
                            class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none"
                        >
                            Create an account
                        </button>
                    </div>
                    <p class="text-gray-800 text-sm mt-6 text-center">
                        Already have an account?
                        <Link
                            href="/login"
                            class="text-blue-600 hover:underline ml-1 whitespace-nowrap font-semibold"
                            >Login here</Link
                        >
                    </p>
                </div>
            </div>
        </form>
    </GuestLayout>
</template>
