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
                                    <div
                                        class="mt-4 grid grid-cols-2 justify-items-center gap-4 md:grid-cols-1 lg:grid-cols-2"
                                    >
                                        <a
                                            href="#"
                                            download
                                            class="flex items-center gap-1 text-sm hover:underline"
                                        >
                                            <svg
                                                class="size-7"
                                                fill="none"
                                                viewBox="0 0 32 32"
                                                id="file-pdf"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M5 4a3 3 0 013-3h11.07a3 3 0 012.146.903l4.929 5.04A3 3 0 0127 9.042V28a3 3 0 01-3 3H8a3 3 0 01-3-3V4z"
                                                    fill="#EB1717"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M27.001 8.667H22a2 2 0 01-2-2V1.008a2 2 0 011.201.604l5.31 5.818A2 2 0 0127 8.667z"
                                                    fill="#FE6C6C"
                                                />
                                                <path
                                                    d="M11.54 15c.62 0 1.073.14 1.357.42.288.276.432.656.432 1.142 0 .294-.059.567-.176.819a1.348 1.348 0 01-.587.61c-.27.153-.64.23-1.107.23h-.44V20H10v-5h1.54zm-.054.868h-.466v1.485h.337c.288 0 .516-.058.682-.175.171-.122.257-.315.257-.581 0-.486-.27-.729-.81-.729zm6.751 1.583c0 .845-.231 1.482-.695 1.912-.464.425-1.11.637-1.938.637H14.24v-5h1.512c.505 0 .941.093 1.31.28.374.187.662.462.865.826.207.365.31.813.31 1.345zm-1.06.028c0-.55-.117-.957-.35-1.218-.235-.262-.575-.393-1.02-.393h-.547v3.257h.438c.986 0 1.48-.549 1.48-1.646zM20.244 20h-1.006v-5H22v.868h-1.756v1.289h1.634v.868h-1.634V20z"
                                                    fill="#fff"
                                                />
                                            </svg>

                                            Скачать каталог
                                        </a>
                                        <a
                                            :href="
                                                '/catalog/brand/' + brand.slug
                                            "
                                            class="flex items-center gap-1 text-sm text-gray-700 hover:underline"
                                        >
                                            <svg
                                                class="size-7"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"
                                                />
                                            </svg>

                                            Подробнее
                                        </a>
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
