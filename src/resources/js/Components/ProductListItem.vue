<template>
    <div
        class="rounded-lg border bg-white p-6 shadow-sm transition-all duration-300 hover:shadow-lg"
    >
        <div class="flex flex-col gap-6 md:flex-row">
            <!-- Изображение -->
            <div class="relative h-48 w-full flex-shrink-0 md:w-48">
                <img
                    :src="product.image || '/images/placeholder.jpg'"
                    :alt="product.name"
                    class="h-full w-full rounded-lg object-cover"
                />

                <!-- Метка распродажи -->
                <div
                    v-if="product.sale_price"
                    class="absolute top-2 left-2 rounded bg-red-500 px-2 py-1 text-sm font-medium text-white"
                >
                    -{{ discountPercentage }}%
                </div>
            </div>

            <!-- Информация -->
            <div class="flex-1">
                <h3 class="mb-2 text-xl font-medium text-gray-900">
                    {{ product.name }}
                </h3>
                <p class="mb-4 text-gray-600">
                    {{ product.description }}
                </p>

                <!-- Характеристики -->
                <div
                    v-if="product.features && product.features.length > 0"
                    class="mb-4"
                >
                    <h4 class="mb-2 font-medium text-gray-900">
                        Основные характеристики:
                    </h4>
                    <ul class="space-y-1 text-sm text-gray-600">
                        <li
                            v-for="feature in product.features.slice(0, 3)"
                            :key="feature"
                        >
                            {{ feature }}
                        </li>
                    </ul>
                </div>

                <!-- Цена и кнопки -->
                <div
                    class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center"
                >
                    <div>
                        <div
                            v-if="product.sale_price"
                            class="flex items-center space-x-2"
                        >
                            <span class="text-2xl font-bold text-red-600">{{
                                formatPrice(product.sale_price)
                            }}</span>
                            <span class="text-lg text-gray-500 line-through">{{
                                formatPrice(product.price)
                            }}</span>
                        </div>
                        <div v-else>
                            <span class="text-2xl font-bold text-gray-900">{{
                                formatPrice(product.price)
                            }}</span>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <button
                            @click="handleAddToCart"
                            :disabled="product.out_of_stock"
                            class="bg-primary hover:bg-primary/90 rounded-lg px-6 py-2 text-white transition-colors disabled:cursor-not-allowed disabled:bg-gray-400"
                        >
                            <span v-if="product.out_of_stock"
                                >Нет в наличии</span
                            >
                            <span v-else>В корзину</span>
                        </button>
                        <button
                            @click="handleAddToWishlist"
                            class="rounded-lg border border-gray-300 p-2 transition-colors hover:border-red-500 hover:text-red-500"
                            :title="'Добавить в избранное'"
                        >
                            <svg
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed } from "vue";

const props = defineProps({
    product: {
        type: Object,
        required: true,
    },
});

const emit = defineEmits(["add-to-cart", "add-to-wishlist", "quick-view"]);

const discountPercentage = computed(() => {
    if (!props.product.sale_price) return 0;
    return Math.round(
        ((props.product.price - props.product.sale_price) /
            props.product.price) *
            100,
    );
});

const formatPrice = (price) => {
    return new Intl.NumberFormat("ru-RU", {
        style: "currency",
        currency: "RUB",
        minimumFractionDigits: 0,
    }).format(price);
};

const handleAddToCart = () => {
    emit("add-to-cart", props.product);
};

const handleAddToWishlist = () => {
    emit("add-to-wishlist", props.product);
};
</script>

<style scoped>
/* Дополнительные стили при необходимости */
</style>
