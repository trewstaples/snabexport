<template>
    <div class="relative">
        <swiper
            :modules="[SwiperAutoplay, SwiperPagination]"
            :slides-per-view="1"
            :loop="true"
            :autoplay="{
                delay: 5000,
                disableOnInteraction: false,
            }"
            :pagination="{
                clickable: true,
                el: '.swiper-pagination',
            }"
            class="w-full"
        >
            <swiper-slide>
                <div class="w-full h-[500px]">
                    <img
                        src="@img/enerpac.webp"
                        alt="Enerpac"
                        class="w-full h-full object-cover"
                    />
                </div>
            </swiper-slide>

            <swiper-slide>
                <div class="w-full h-[500px]">
                    <img
                        src="@img/stalex.webp"
                        alt="Stalex"
                        class="w-full h-full object-cover"
                    />
                </div>
            </swiper-slide>

            <swiper-slide>
                <div class="w-full h-[500px]">
                    <img
                        src="@img/machine.webp"
                        alt="Machine"
                        class="w-full h-full object-cover"
                    />
                </div>
            </swiper-slide>
        </swiper>

        <!-- Пагинация -->
        <div class="swiper-pagination !bottom-4"></div>
    </div>
</template>

<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";

// Определяем модули Swiper
const SwiperAutoplay = Autoplay;
const SwiperPagination = Pagination;
</script>

<style scoped>
/* Кастомизация пагинации */
:deep(.swiper-pagination-bullet) {
    width: 10px;
    height: 10px;
    background-color: rgba(255, 255, 255, 0.6);
}

:deep(.swiper-pagination-bullet-active) {
    background-color: white;
}
</style>
