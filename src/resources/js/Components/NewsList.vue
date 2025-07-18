<template>
    <section class="section-default">
        <div class="section-container">
            <h1 class="section-title">Новости</h1>
            <div class="flex flex-col gap-8">
                <a
                    v-for="news in newsList"
                    :key="news.id || news.slug"
                    :href="'/news/' + news.slug"
                    class="rounded-8 flex cursor-pointer flex-col items-stretch gap-6 p-8 hover:bg-gray-100 md:flex-row"
                >
                    <div
                        class="order-2 flex flex-1 flex-col justify-between md:order-1"
                    >
                        <div>
                            <div class="mb-2 text-sm text-gray-400">
                                {{ formatDate(news.created_at) }}
                            </div>
                            <div
                                class="mb-2 text-xl font-bold md:text-2xl"
                                v-html="news.title"
                            ></div>
                            <div
                                class="mb-4 text-gray-700"
                                v-html="news.text"
                            ></div>
                        </div>
                        <a
                            v-if="news.slug"
                            :to="`/news/${news.slug}`"
                            class="mt-2 flex items-center gap-1 text-sm text-gray-400 hover:underline"
                        >
                            Чуть больше подробностей
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                    <div
                        v-if="news.preview_image_name"
                        class="order-1 mb-4 flex flex-shrink-0 items-center justify-center md:order-2 md:mb-0"
                    >
                        <picture>
                            <source
                                :type="'image/webp'"
                                :srcset="`${news.preview_image_name}-sm.webp, ${news.preview_image_name}-sm@2x.webp 2x`"
                            />
                            <img
                                :src="`${news.preview_image_name}-sm.jpg`"
                                :srcset="`${news.preview_image_name}-sm@2x.jpg 2x`"
                                class="rounded-8 object-contain"
                                :alt="news.title"
                                loading="lazy"
                            />
                        </picture>
                    </div>
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
import dayjs from "dayjs";

const props = defineProps({
    newsList: {
        type: Array,
        required: true,
    },
});

const formatDate = (date) => {
    return dayjs(date).format("DD.MM.YYYY");
};
</script>
