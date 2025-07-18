<template>
    <section class="section-default">
        <div class="section-container">
            <h2 class="section-title">Каталог продукции</h2>

            <!-- Сетка категорий -->
            <div
                class="grid-adaptive-gap grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
            >
                <a
                    v-for="category in brandCategories"
                    :key="category.id"
                    :href="'brands-categories/' + category.slug"
                    class="group rounded-8 relative aspect-square cursor-pointer overflow-hidden bg-white shadow-md transition-all duration-500 hover:-translate-y-2 hover:scale-[1.02] hover:shadow-2xl"
                >
                    <!-- Фоновое изображение -->
                    <picture>
                        <source
                            :type="'image/webp'"
                            :srcset="`${category.image_name}.webp, ${category.image_name}@2x.webp 2x`"
                        />
                        <img
                            :src="`${category.image_name}.jpg`"
                            :srcset="`${category.image_name}@2x.jpg 2x`"
                            class="absolute inset-0 h-full w-full object-cover transition-all duration-700 group-hover:scale-110 group-hover:rotate-1"
                            :alt="category.name"
                            loading="lazy"
                        />
                    </picture>

                    <!-- Градиентный overlay для читаемости -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent transition-all duration-500 group-hover:from-black/70 group-hover:via-black/30"
                    ></div>

                    <!-- Декоративная рамка при hover -->
                    <div
                        class="absolute inset-0 border-2 border-white/0 transition-all duration-500 group-hover:inset-2 group-hover:border-white/20"
                    ></div>

                    <!-- Текст поверх изображения -->
                    <div
                        class="absolute inset-0 flex items-end p-6 transition-all duration-500 group-hover:p-8"
                    >
                        <h3
                            class="text-xl leading-tight font-bold text-white drop-shadow-lg transition-all duration-500 group-hover:text-2xl group-hover:drop-shadow-2xl"
                        >
                            {{ category.name }}
                        </h3>
                    </div>

                    <!-- Блик-эффект -->
                    <div
                        class="absolute inset-0 -translate-x-full -translate-y-full transform bg-gradient-to-tr from-transparent via-white/10 to-transparent transition-transform duration-700 group-hover:translate-x-full group-hover:translate-y-full"
                    ></div>
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
defineProps({
    brandCategories: {
        type: Array,
        required: true,
    },
});
</script>
