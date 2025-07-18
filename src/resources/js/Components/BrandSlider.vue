<template>
    <section class="section-default">
        <div class="section-container mb-12">
            <h2 class="section-title">Наши бренды</h2>
        </div>
        <swiper-container
            :modules="[Autoplay, FreeMode]"
            :slidesPerView="slidesPerView"
            :autoHeight="true"
            :loop="true"
            :freeMode="true"
            :speed="5000"
            :spaceBetween="0"
            :autoplay="{
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
                stopOnLastSlide: false,
            }"
        >
            <swiper-slide
                class="mx-[20px] flex h-[80px] w-[212px] items-center justify-center"
                v-for="brand in brands"
                :key="brand.alt"
            >
                <img
                    class="max-h-[70px] w-[212px]"
                    :src="brand.logo_name"
                    :alt="brand.alt"
                />
            </swiper-slide>
        </swiper-container>
    </section>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { register } from "swiper/element/bundle";
import { Autoplay, FreeMode } from "swiper/modules";
import "swiper/css/autoplay";
import "swiper/css/free-mode";

const props = defineProps({
    brands: {
        type: Array,
        required: true,
    },
});

register();

const slideWidth = 212;
const slidesPerView = ref(1);

function getSlidesPerView(viewportWidth) {
    return Math.max(1, Math.floor(viewportWidth / slideWidth));
}

function updateSlidesPerView() {
    if (typeof window !== "undefined") {
        slidesPerView.value = getSlidesPerView(window.innerWidth);
    }
}

onMounted(() => {
    updateSlidesPerView();
    window.addEventListener("resize", updateSlidesPerView);
});

onBeforeUnmount(() => {
    window.removeEventListener("resize", updateSlidesPerView);
});
</script>

<style>
swiper-container::part(wrapper) {
    transition-timing-function: linear !important;
}
</style>
