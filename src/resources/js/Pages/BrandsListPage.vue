<template>
    <Layout
        title="Бренды"
        description="Каталог брендов компании СнабЭкспорт ПРО"
    >
        <div class="section-default">
            <div class="section-container">
                <!-- Категории продукции -->
                <div class="space-y-12">
                    <div
                        v-for="category in brandCategories"
                        :key="category.id"
                        class="category-section"
                    >
                        <h1 class="section-title mb-10">
                            {{ category.name }}
                        </h1>
                        <div
                            class="grid-adaptive-gap grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
                        >
                            <div
                                v-for="brand in category.brands"
                                :key="brand.id"
                                class="company-card group"
                            >
                                <div
                                    class="rounded-8 flex h-full flex-col bg-white p-6 shadow-md transition-all duration-300 hover:shadow-xl"
                                >
                                    <a
                                        :href="'/brands/' + brand.slug"
                                        class="mb-4 flex h-24 cursor-pointer items-center justify-center"
                                    >
                                        <img
                                            :src="brand.logo_name"
                                            :alt="brand.name"
                                            class="h-16 max-w-[200px] object-contain"
                                        />
                                    </a>
                                    <div
                                        class="text-center text-lg font-medium text-gray-900"
                                    >
                                        {{ brand.name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";

const props = defineProps({
    brandCategories: {
        type: Array,
        required: true,
    },
});
</script>

<style scoped>
.category-section:not(:last-child) {
    border-bottom: 1px solid #e5e7eb;
    padding-bottom: 3rem;
}
</style>
