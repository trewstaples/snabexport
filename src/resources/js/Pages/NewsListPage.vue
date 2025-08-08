<template>
    <Layout title="Новости">
        <NewsList :newsList="newsList" />
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";
import NewsList from "../Components/NewsList.vue";

const props = defineProps({
    newsList: Array,
});
</script>
