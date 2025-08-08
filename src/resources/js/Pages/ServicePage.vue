<template>
    <Layout :title="service.name" :description="description">
        <section class="section-default">
            <section class="section-container">
                <!-- Хедер с иконкой и заголовком -->
                <div
                    class="rounded-8 mb-8 flex items-center gap-6 bg-gradient-to-r from-blue-50 to-indigo-50 p-6"
                >
                    <div class="flex-shrink-0">
                        <img
                            :src="service.image_name"
                            :alt="service.name"
                            class="h-16 w-16 text-blue-600"
                        />
                    </div>
                    <div class="flex-1">
                        <h1 class="text-primary text-3xl font-bold">
                            {{ service.name }}
                        </h1>
                    </div>
                </div>

                <!-- Основной контент -->
                <div class="max-w-4xl">
                    <div
                        class="prose prose-lg leading-relaxed text-gray-700"
                        v-html="service.description"
                    ></div>
                </div>
            </section>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";

const props = defineProps({
    service: {
        type: Object,
        required: true,
    },
    description: {
        type: String,
        required: true,
    },
});
</script>
