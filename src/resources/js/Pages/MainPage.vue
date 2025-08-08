<template>
    <Layout
        title="СнабЭкспорт ПРО - Гидравлическое и пневматическое оборудование"
        description="СнабЭкспорт ПРО - гидравлическое и пневматическое оборудование. Продажа, аренда, ремонт и сервисное обслуживание."
    >
        <VideoHero />
        <Advantages id="about" />
        <MainSlider />

        <BrandCategories :brand-categories="brandCategories" />
        <Services :services="services" />

        <NewsList :news-list="newsList" />
        <BrandSlider :brands="brands" />
    </Layout>
</template>

<script setup>
import VideoHero from "@/Components/VideoHero.vue";
import MainSlider from "@/Components/MainSlider.vue";
import Advantages from "@/Components/Advantages.vue";
import BrandCategories from "@/Components/BrandCategories.vue";
import Services from "@/Components/Services.vue";
import Layout from "@/Layouts/Layout.vue";
import BrandSlider from "@/Components/BrandSlider.vue";
import NewsList from "@/Components/NewsList.vue";

defineProps({
    brandCategories: Array,
    services: Array,
    brands: Array,
    newsList: Array,
});
</script>
