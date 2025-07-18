<template>
    <Layout>
        <section class="section-default">
            <div class="section-container">
                <div
                    v-if="newsItem.preview_image_name"
                    class="mb-8 flex justify-center"
                >
                    <picture>
                        <source
                            :type="'image/webp'"
                            :srcset="`${newsItem.preview_image_name}.webp, ${newsItem.preview_image_name}@2x.webp 2x`"
                        />
                        <img
                            :src="`${newsItem.preview_image_name}.jpg`"
                            :srcset="`${newsItem.preview_image_name}@2x.jpg 2x`"
                            class="rounded-8 object-contain"
                            :alt="newsItem.title"
                            loading="lazy"
                        />
                    </picture>
                </div>
                <h1
                    class="text-primary mb-8 text-4xl font-bold md:text-5xl"
                    v-html="newsItem.title"
                ></h1>
                <div
                    class="text-base leading-relaxed text-gray-700 md:text-lg"
                    v-html="newsItem.text"
                ></div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";

const props = defineProps({
    newsItem: Object,
});
</script>
