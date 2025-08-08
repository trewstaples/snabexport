<template>
    <div
        @click="
            router.visit(product.url, {
                preserveScroll: false,
                preserveState: true,
            })
        "
        class="product-card group cursor-pointer rounded-lg bg-white p-4 transition-all duration-300 hover:shadow-lg"
    >
        <!-- Изображение -->
        <div class="mb-4 aspect-square overflow-hidden rounded-md">
            <picture>
                <source
                    :type="'image/webp'"
                    :srcset="`${product.preview_image}@2x.webp, ${product.preview_image}@2x.webp 2x`"
                />
                <img
                    :src="`${product.preview_image}@2x.jpg`"
                    :srcset="`${product.preview_image}@2x.jpg 2x`"
                    class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-105"
                    @error="handleImageError"
                    :alt="product.name"
                    loading="lazy"
                />
            </picture>
        </div>

        <!-- Информация о продукте -->
        <div class="space-y-2">
            <!-- Название -->
            <h3
                class="line-clamp-2 min-h-[2.5rem] text-sm font-medium text-gray-900"
            >
                {{ product.name }}
            </h3>

            <!-- Цена -->
            <div class="flex items-end justify-between">
                <div v-if="product.price" class="space-y-1">
                    <!-- Если есть скидка -->
                    <div
                        v-if="product.is_sale && product.sale_price"
                        class="space-y-0.5"
                    >
                        <div class="text-lg font-bold text-red-600">
                            {{ formatPrice(product.sale_price) }} ₽
                        </div>
                        <div class="text-sm text-gray-500 line-through">
                            {{ formatPrice(product.price) }} ₽
                        </div>
                    </div>
                    <!-- Обычная цена -->
                    <div v-else class="text-lg font-bold text-gray-900">
                        {{ formatPrice(product.price) }} ₽
                    </div>
                </div>
                <!-- Если цены нет -->
                <div v-else class="text-sm text-gray-500">Цена по запросу</div>

                <!-- Кнопка корзины -->
                <button
                    class="bg-primary rounded-lg px-4 py-2 text-sm font-medium text-white transition-colors hover:opacity-90"
                    @click="$emit('add-to-cart', product)"
                >
                    В корзину
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { router } from "@inertiajs/vue3";

const props = defineProps({
    product: {
        type: Object,
        required: true,
    },
});

defineEmits(["add-to-cart"]);

// Форматирование цены
const formatPrice = (price) => {
    return new Intl.NumberFormat("ru-RU").format(price);
};

// Обработчик ошибки загрузки изображения
const handleImageError = (e) => {
    // Заменяем src на SVG заглушку
    e.target.src = `data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='rgb(156 163 175)' class='w-6 h-6'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z' /%3E%3C/svg%3E`;
    // Убираем эффект hover для заглушки
    e.target.classList.remove("group-hover:scale-105");
    // Добавляем стили для центрирования и размера заглушки
    e.target.classList.add("p-8", "opacity-50");
};
</script>

<style scoped>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
