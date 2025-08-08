<template>
    <Layout :title="product.name">
        <section class="section-default">
            <div class="section-container">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <!-- Основное изображение -->
                    <div>
                        <swiper-container
                            style="
                                --swiper-navigation-color: var(--color-primary);
                                --swiper-pagination-color: var(--color-primary);
                            "
                            class="mySwiper"
                            thumbs-swiper=".mySwiper2"
                            :loop="true"
                            :spaceBetween="10"
                        >
                            <swiper-slide
                                v-for="image in product.text_images"
                                :key="image.id"
                            >
                                <picture>
                                    <source
                                        :type="'image/webp'"
                                        :srcset="`${image.name}@2x.webp, ${image.name}@2x.webp 2x`"
                                    />
                                    <img
                                        :src="`${image.name}@2x.jpg`"
                                        :srcset="`${image.name}@2x.jpg 2x`"
                                        class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-105"
                                        @error="handleImageError"
                                        :alt="product.name"
                                        loading="lazy"
                                    />
                                </picture>
                            </swiper-slide>
                        </swiper-container>
                        <swiper-container
                            v-if="product.text_images.length > 1"
                            class="mySwiper2"
                            :loop="true"
                            :spaceBetween="10"
                            :slidesPerView="4"
                            :freeMode="true"
                            :watchSlidesProgress="true"
                        >
                            <swiper-slide
                                v-for="image in product.text_images"
                                :key="image.id"
                            >
                                <picture>
                                    <source
                                        :type="'image/webp'"
                                        :srcset="`${image.name}.webp, ${image.name}@2x.webp 2x`"
                                    />
                                    <img
                                        :src="`${image.name}.jpg`"
                                        :srcset="`${image.name}@2x.jpg 2x`"
                                        class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-105"
                                        @error="handleImageError"
                                        :alt="product.name"
                                        loading="lazy"
                                    />
                                </picture>
                            </swiper-slide>
                        </swiper-container>
                    </div>

                    <!-- Информация о товаре -->
                    <div class="space-y-6">
                        <h1 class="text-3xl font-bold text-gray-900">
                            {{ product.name }}
                        </h1>

                        <div class="space-y-4 border-b border-gray-200 pb-6">
                            <ProductPriceDisplay
                                :product="product"
                                :selected-model="selectedModel"
                            />
                        </div>

                        <!-- Описание -->
                        <div v-if="product.description" class="max-w-none">
                            <h2 class="text-xl font-semibold">Описание</h2>
                            <div v-html="product.description"></div>
                        </div>

                        <!-- Модели продукта -->
                        <div
                            v-if="
                                product.product_models &&
                                product.product_models.length > 0
                            "
                        >
                            <ProductModelsComparison
                                :models="product.product_models"
                                @model-selected="handleModelSelected"
                            />
                        </div>

                        <!-- Технические характеристики (если нет моделей) -->
                        <div v-else-if="product.specifications">
                            <h2 class="mb-4 text-xl font-semibold">
                                Технические характеристики
                            </h2>
                            <div class="space-y-3">
                                <div
                                    v-for="specification in product.specifications"
                                    :key="specification.name"
                                    class="flex items-baseline gap-2"
                                >
                                    <span
                                        class="max-w-[150px] min-w-0 flex-shrink-0 leading-relaxed font-medium break-words text-gray-700 sm:max-w-none sm:min-w-[200px] lg:min-w-[250px]"
                                        >{{ specification.name }}</span
                                    >
                                    <span
                                        class="mx-2 min-w-4 flex-1 border-b border-dotted border-gray-300"
                                    ></span>
                                    <span
                                        class="max-w-[150px] min-w-0 flex-shrink-0 text-left leading-relaxed font-normal break-words text-gray-500 sm:max-w-[300px]"
                                        >{{ specification.value }}</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";
import ProductModelsComparison from "@/Components/ProductModelsComparison.vue";
import ProductPriceDisplay from "@/Components/ProductPriceDisplay.vue";
import { ref } from "vue";
import { register } from "swiper/element/bundle";
import "swiper/css/free-mode";
import "swiper/css/navigation";
import "swiper/css/thumbs";

const props = defineProps({
    product: {
        type: Object,
        required: true,
    },
});

register();

const selectedModel = ref(null);

const handleModelSelected = (model) => {
    selectedModel.value = model;
};
</script>

<style scoped>
.mySwiper2 .swiper-slide-thumb-active {
    opacity: 0.5;
}

.swiper-slide img {
    object-fit: cover;
}
</style>
