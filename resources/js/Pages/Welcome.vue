<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />
    <div class="max-w-7xl border rounded-md mx-auto my-6 py-8">
        <!-- Header -->
        <section>   
            <div class="text-center">
                <h1 class="text-2xl font-bold">Generate PDF Using DOM PDF</h1>
                <p class="text-md font-medium">With Laravel Intertia Vue</p>
            </div>
        </section>
        <!-- buttons  -->
        <section class="flex justify-center gap-4 mt-10">
            <a href="/download/pdf1" class="px-6 py-2 bg-violet-600 hover:scale-125 transition-all  ease-in-out shadow-lg text-white rounded-md">Download PDF</a>
            <a href="/download/pdf2" class="px-6 py-2 bg-pink-600 hover:scale-125 transition-all  ease-in-out shadow-lg text-white rounded-md">Download PDF2</a>
            <a href="/stream" class="px-6 py-2 bg-orange-600 hover:scale-125 transition-all  ease-in-out shadow-lg text-white rounded-md">Stream PDF</a>
            <a href="/form" class="px-6 py-2 bg-green-600 hover:scale-125 transition-all  ease-in-out shadow-lg text-white rounded-md">Form Submit & Download PDF</a>
            <a href="/login" class="px-6 py-2 bg-yellow-600 hover:scale-125 transition-all  ease-in-out shadow-lg text-white rounded-md">Download Using ID</a>
        </section>
    </div>
</template>

<style>
</style>
