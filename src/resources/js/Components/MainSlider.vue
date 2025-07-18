<template>
    <section>
        <div class="relative">
            <swiper-container
                :modules="[Autoplay, Pagination]"
                :slidesPerView="1"
                :loop="true"
                :autoplay="{
                    delay: 5000,
                    disableOnInteraction: false,
                }"
                :pagination="{
                    clickable: true,
                    el: '.swiper-pagination',
                }"
                class="h-[480px] w-full lg:h-[620px]"
            >
                <swiper-slide v-for="slide in slides" :key="slide.alt">
                    <div class="relative h-full w-full">
                        <img
                            :src="slide.image"
                            :alt="slide.alt"
                            class="h-[110%] w-full object-cover"
                        />

                        <!-- Overlay для лучшей читаемости текста -->
                        <div class="bg-opacity-30 absolute inset-0"></div>

                        <!-- Контент поверх изображения -->
                        <div
                            class="absolute inset-0 z-10 flex flex-col items-center justify-center text-white"
                        >
                            <h1
                                class="mb-4 text-center text-4xl font-bold md:text-6xl"
                            >
                                {{ slide.title }}
                            </h1>
                            <p
                                class="mb-8 max-w-3xl text-center text-lg md:text-xl"
                            >
                                {{ slide.description }}
                            </p>
                            <button
                                class="bg-primary hover:bg-primary-dark rounded-lg px-8 py-3 text-lg font-semibold text-white transition-colors"
                            >
                                {{ slide.buttonText }}
                            </button>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>

            <!-- Пагинация -->
            <div class="swiper-pagination !bottom-4"></div>
        </div>
    </section>
</template>

<script setup>
import { Autoplay, Pagination } from "swiper/modules";
import { register } from "swiper/element/bundle";
import "swiper/css";
import "swiper/css/pagination";
register();

const slides = [
    {
        image: new URL("@img/enerpac.webp", import.meta.url).href,
        alt: "Enerpac",
        title: "Профессиональное оборудование",
        description:
            "Широкий ассортимент гидравлического оборудования от ведущих мировых производителей",
        buttonText: "Смотреть каталог",
    },
    {
        image: new URL("@img/stalex.webp", import.meta.url).href,
        alt: "Stalex",
        title: "Металлообрабатывающее оборудование",
        description:
            "Качественные станки и инструменты для профессиональной металлообработки",
        buttonText: "Узнать больше",
    },
    {
        image: new URL("@img/winding-machine.webp", import.meta.url).href,
        alt: "Winding Machine",
        title: "Инновационные технологии",
        description:
            "Современные решения для промышленного производства и сервисного обслуживания",
        buttonText: "Наши услуги",
    },
];
</script>

<style scoped>
/* Кастомизация пагинации */
:deep(.swiper-pagination-bullet) {
    width: 12px;
    height: 12px;
    background-color: rgba(255, 255, 255, 0.6);
    border: 2px solid rgba(255, 255, 255, 0.3);
}

:deep(.swiper-pagination-bullet-active) {
    background-color: white;
    border-color: white;
}

/* Hover эффекты для кнопок */
.bg-primary {
    background-color: #3b82f6;
}

.bg-primary-dark:hover {
    background-color: #2563eb;
}
</style>
