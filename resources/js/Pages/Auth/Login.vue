<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<!-- <template>
    <Head title="Log in" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Forgot your password?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template> -->

<template>
     <div class="max-w-7xl h-[100vh] mx-auto grid grid-cols-12 gap-3 p-6">
        <!-- left side  -->
        <div class="col-span-12 md:col-span-4 flex items-center rounded-md px-4 xl:px-8 2xl:px-16">
            <div class="">
                <Link href="/" as="button" class="flex items-center">
                    <CloudIcon class="h-8 w-8 text-indigo-600"/>
                </Link>
                <h1 class="text-xl md:text-2xl font-bold text-gray-700 py-2">Welcome to <span class="text-xl xl:text-2xl 2xl:text-3xl  bg-gradient-to-r bg-clip-text text-transparent from-violet-500 via-sky-600 to-violet-700 animate-text">Login</span></h1>
                <p class="text-base md:text-lg font-medium text-gray-500">Sign-in to your account & start an adventure</p>

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>
                <form @submit.prevent="submit" class="mt-4">
                    <div class="mb-5">
                        <div class="relative">
                            <input type="email" v-model="form.email" id="Email" autocomplete="on" class="block h-9 w-full text-sm text-gray-600 px-3 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-violet-600 peer" placeholder=" " />
                            <label for="Email" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-violet-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-2">Email</label>
                        </div>
                        <InputError class="mt-1" :message="form.errors.email" />
                    </div>

                    <div class="mb-3 ">
                        <div class="relative">
                            <input type="password" v-model="form.password" id="Password" autocomplete="on" class="block h-9 w-full text-sm px-3 text-gray-600 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-violet-600 peer" placeholder=" " />
                            <label for="Password" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-violet-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-2">Password</label>
                        </div>
                        <InputError class="mt-1" :message="form.errors.password" />
                    </div>

                    <div class="mb-3 flex items-center justify-end">
                        <!-- <Link href="/" class="text-xs  lg:text-sm xl:text-base font-semibold text-violet-600 hover:text-violet-800">Forget Password?</Link> -->
                        <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-violet-700 hover:text-violet-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Forgot your password?
                        </Link>
                    </div>

                    <div class="mb-5">
                        <button type="submit" class="w-full bg-gradient-to-r inline-flex justify-center items-center from-indigo-500 to-violet-500 py-1 rounded-md text-base font-semibold text-white hover:g-gradient-to-r hover:from-indigo-700 hover:to-violet-600">
                            <svg v-if="form.processing" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span v-if="form.processing">Processing ... </span>
                            <span v-else>Login</span>
                        </button>
                    </div>
                </form>

                <div class="flex items-center justify-between">
                    <p class="text-xs  lg:text-sm xl:text-base font-semibold text-gray-500">New on our platform?</p>
                    <Link :href="route('register')" class="text-xs lg:text-sm xl:text-base font-semibold text-violet-600 hover:text-violet-800 cursor-pointer">Create an Account</Link>
                </div>
            </div>
        </div>

        <!-- right side  -->
        <div class="hidden  md:col-span-8 bg-[#F8F7FA] rounded-xl md:flex justify-center items-center">
            <div class="max-w-[650px] ">
                <!-- <img src="/images/login_bg.png" alt=""> -->
                <img src="https://img.freepik.com/free-vector/happy-boy-with-casual-clothes-smartphone_24640-46929.jpg?w=1060&t=st=1689627742~exp=1689628342~hmac=a37c8f8a3d86974db5753dc6e42531bb9c088b6bfe9afa3d91e677b14f32d9c6" alt="">
            </div>
        </div>
   </div>
</template>
