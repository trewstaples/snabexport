<template>
    <section
        class="relative h-[80vh] overflow-hidden sm:h-[100vh] md:h-[85vh] lg:h-[80vh] xl:h-[85vh] 2xl:h-[90vh]"
    >
        <!-- Видео фон -->
        <video
            ref="videoRef"
            class="absolute inset-0 h-full w-full object-cover"
            autoplay
            muted
            loop
            playsinline
            @loadeddata="handleVideoLoad"
        >
            <source :src="videoSrc" type="video/mp4" />
            <!-- Fallback изображение для случаев, когда видео не загружается -->
            <img
                :src="fallbackImage"
                alt="Фоновое изображение"
                class="h-full w-full object-cover"
            />
        </video>

        <!-- Темный overlay для улучшения читаемости -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Контент поверх видео -->
        <div
            class="relative z-10 flex h-full flex-col items-center justify-center px-4 text-white"
        >
            <div class="max-w-5xl text-center">
                <h1
                    class="mb-6 text-4xl leading-tight font-bold md:text-6xl lg:text-7xl"
                    :class="{ 'animate-fade-in-up': isVideoLoaded }"
                >
                    {{ heroTitle }}
                </h1>

                <p
                    class="mx-auto mb-8 max-w-3xl text-lg leading-relaxed md:text-xl lg:text-2xl"
                    :class="{ 'animate-fade-in-up-delay': isVideoLoaded }"
                >
                    {{ heroDescription }}
                </p>

                <div
                    class="flex flex-col justify-center gap-4 sm:flex-row"
                    :class="{ 'animate-fade-in-up-delay-2': isVideoLoaded }"
                >
                    <button
                        @click="scrollToSection('catalog')"
                        class="bg-primary hover:bg-primary-dark rounded-lg px-8 py-4 text-lg font-semibold text-white transition-all duration-300"
                    >
                        Смотреть каталог
                    </button>

                    <button
                        @click="scrollToSection('about')"
                        class="rounded-lg border-2 border-white px-8 py-4 text-lg font-semibold text-white transition-all duration-300 hover:bg-white hover:text-black"
                    >
                        О компании
                    </button>
                </div>
            </div>
        </div>

        <!-- Индикатор скролла -->
        <div
            class="absolute bottom-8 left-1/2 -translate-x-1/2 transform animate-bounce text-white"
        >
            <svg
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 14l-7 7m0 0l-7-7m7 7V3"
                ></path>
            </svg>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from "vue";

const videoRef = ref(null);
const isVideoLoaded = ref(false);

const heroTitle = "СнабЭкспорт ПРО";
const heroDescription =
    "Профессиональное промышленное оборудование и комплексные решения для вашего бизнеса";

const videoSrc = "/storage/videos/hero-video.mp4";
const fallbackImage = "/storage/images/hero-fallback.png";

const scrollToSection = (sectionId) => {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ behavior: "smooth" });
    }
};

const handleVideoLoad = () => {
    isVideoLoaded.value = true;
};

onMounted(() => {
    // Попытка автовоспроизведения видео
    if (videoRef.value) {
        videoRef.value.play().catch(console.error);
    }
});
</script>

<style scoped>
/* Анимации появления */
.animate-fade-in-up {
    animation: fadeInUp 1s ease-out;
}

.animate-fade-in-up-delay {
    animation: fadeInUp 1s ease-out 0.3s both;
}

.animate-fade-in-up-delay-2 {
    animation: fadeInUp 1s ease-out 0.6s both;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Стили для кнопок */
.bg-primary {
    background-color: #3b82f6;
}

.bg-primary-dark:hover {
    background-color: #2563eb;
}

button {
    transition: all 0.3s ease;
}

/* Адаптивность */
@media (max-width: 768px) {
    .animate-fade-in-up,
    .animate-fade-in-up-delay,
    .animate-fade-in-up-delay-2 {
        animation-duration: 0.8s;
    }
}
</style>
