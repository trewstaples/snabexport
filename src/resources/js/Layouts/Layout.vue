<template>
    <Head>
        <title>{{ title }}</title>
        <meta v-if="description" name="description" :content="description" />
    </Head>
    <Header />
    <main>
        <slot />
    </main>
    <Footer />
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import Header from "./Header.vue";
import Footer from "./Footer.vue";

defineProps({
    title: String,
    description: String,
});
</script>
