<template>
    <Layout>
        <div class="section-default">
            <div class="section-container">
                <!-- Основной контент -->
                <div class="flex gap-8">
                    <Sidebar :categories="categories" />

                    <!-- Секция с товарами -->
                    <ProductsList :products="products" />
                </div>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";
import Sidebar from "@/Components/OnlineStore/Sidebar.vue";
import ProductsList from "@/Components/OnlineStore/ProductsList.vue";

const props = defineProps({
    categories: {
        type: Array,
        default: () => [],
    },
    products: {
        type: Array,
        default: () => [],
    },
});
</script>

<style scoped></style>
