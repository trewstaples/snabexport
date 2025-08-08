<template>
    <Layout
        :title="brand.name"
        :description="`Продажа и поставка оборудования ${brand.name} с доставкой по России. Получите каталог и бесплатную консультацию`"
    >
        <section class="section-default">
            <section class="section-container">
                <div class="flex w-full flex-col items-center p-8">
                    <img
                        :src="brand.logo_name"
                        :alt="brand.name"
                        class="mb-6 h-auto w-full max-w-[220px] sm:max-w-[300px] md:max-w-[400px] lg:max-w-[500px]"
                    />
                    <h1
                        class="text-primary mb-4 text-center text-3xl font-bold"
                    >
                        {{ brand.name }}
                    </h1>
                    <div
                        class="text-left text-lg text-gray-700"
                        v-html="brand.description"
                    ></div>
                </div>
            </section>

            <!-- Секция каталогов -->
            <section
                v-if="brand.catalogs?.length"
                class="section-container mt-8"
            >
                <h2 class="text-primary mb-6 text-center text-2xl font-bold">
                    Каталоги продукции
                </h2>
                <div
                    class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"
                >
                    <a
                        v-for="catalog in brand.catalogs"
                        :key="catalog.id"
                        :href="catalog.file_name"
                        target="_blank"
                        class="flex items-center rounded-lg border border-gray-200 p-4 transition-colors hover:bg-gray-50"
                    >
                        <div class="mr-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8 text-red-500"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                                />
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium">{{ catalog.name }}</div>
                            <div class="text-sm text-gray-500">Открыть PDF</div>
                        </div>
                    </a>
                </div>
            </section>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";

const props = defineProps({
    brand: {
        type: Object,
        required: true,
    },
});
</script>
