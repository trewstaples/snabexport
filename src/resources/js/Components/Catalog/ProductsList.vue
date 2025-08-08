<template>
    <div class="flex-1">
        <div
            class="grid-adaptive-gap grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
        >
            <div
                v-for="product in products"
                :key="product.id"
                class="product-card group"
            >
                <ProductCard :product="product" />
            </div>
        </div>
    </div>
</template>

<script setup>
import ProductCard from "@/Components/Catalog/ProductCard.vue";

const props = defineProps({
    products: {
        type: Array,
        required: true,
    },
});
</script>
