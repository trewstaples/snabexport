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
                        class="mb-6 h-50 max-w-[500px]"
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
