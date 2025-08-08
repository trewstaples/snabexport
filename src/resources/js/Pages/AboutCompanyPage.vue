<template>
    <Layout title="О компании">
        <!-- Главный заголовок -->
        <section
            class="section-default bg-gradient-to-r from-blue-50 to-indigo-50"
        >
            <div class="section-container">
                <div class="text-center">
                    <h1
                        class="text-primary mb-4 text-4xl font-bold md:text-5xl"
                    >
                        О компании
                    </h1>
                    <p class="mx-auto max-w-3xl text-xl text-gray-600">
                        Более 17 лет опыта в области гидравлического
                        оборудования и профессиональных решений
                    </p>
                </div>
            </div>
        </section>

        <!-- Преимущества -->
        <Advantages />

        <!-- Основная информация о компании -->
        <section class="section-default">
            <div class="section-container">
                <div class="rounded-8 bg-white p-8 shadow-md">
                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
                        <!-- История и направления деятельности -->

                        <div class="space-y-4 leading-relaxed text-gray-700">
                            <p>
                                Компания ООО «СнабЭкспорт» (SnabExport)
                                образована в 2007 году. Основное направление
                                компании — гидравлическое оборудование и
                                инструмент для различных областей промышленности
                                и строительства, оборудование и инструмент для
                                сервиса коммерческого и легкового транспорта.
                            </p>
                            <p>
                                В настоящее время мы являемся одной из ведущих
                                компаний на территории РФ в области
                                гидравлического оборудования высокого давления и
                                имеем команду профессионалов, работающих на
                                рынке профессионального оборудования и
                                инструмента более 10 лет.
                            </p>
                        </div>

                        <!-- География присутствия -->
                        <div>
                            <div class="mb-6 leading-relaxed text-gray-700">
                                <p>
                                    На сегодняшний день у нас есть широкая
                                    дилерская сеть в таких городах как:
                                </p>
                            </div>
                            <div class="grid grid-cols-1 gap-3">
                                <div
                                    class="rounded-8 bg-blue-50 p-3 text-center"
                                >
                                    <div class="text-primary font-semibold">
                                        Пенза
                                    </div>
                                </div>
                                <div
                                    class="rounded-8 bg-blue-50 p-3 text-center"
                                >
                                    <div class="text-primary font-semibold">
                                        Пермь
                                    </div>
                                </div>
                                <div
                                    class="rounded-8 bg-blue-50 p-3 text-center"
                                >
                                    <div class="text-primary font-semibold">
                                        Екатеринбург
                                    </div>
                                </div>
                                <div
                                    class="rounded-8 bg-blue-50 p-3 text-center"
                                >
                                    <div class="text-primary font-semibold">
                                        Краснодар
                                    </div>
                                </div>
                                <div
                                    class="rounded-8 bg-blue-50 p-3 text-center"
                                >
                                    <div class="text-primary font-semibold">
                                        Ростов
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Инженерный центр и возможности -->

                        <div class="space-y-4 leading-relaxed text-gray-700">
                            <p>
                                Наш инженерный центр может решать задачи,
                                связанные с производством приспособлений для
                                различных областей металлообработки,
                                изготавливать заказное гидравлическое
                                оборудование (насосы, цилиндры).
                            </p>
                            <p>
                                Мы с помощью гидравлики Enerpac решаем задачи по
                                перемещению, выравниванию сверхтяжёлых и
                                габаритных объектов весом 250-300 тонн и выше, а
                                также проектируем и оснащаем участки для сервиса
                                коммерческого транспорта.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Видео -->
        <section class="section-default bg-gray-50">
            <div class="section-container">
                <h1 class="section-title text-center">Видео</h1>
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <!-- Видео 1 -->
                    <div class="rounded-8 bg-white p-6 shadow-md">
                        <h3 class="mb-4 text-lg font-semibold text-gray-800">
                            Станок SNAB с СОЖ в работе
                        </h3>
                        <div class="rounded-8 overflow-hidden">
                            <iframe
                                width="100%"
                                height="250"
                                src="https://rutube.ru/play/embed/9ee71afbdfe42209aaafb7f059a8bfe0/"
                                frameBorder="0"
                                allow="clipboard-write; autoplay"
                                webkitAllowFullScreen
                                mozallowfullscreen
                                allowFullScreen
                                class="rounded-8"
                            ></iframe>
                        </div>
                    </div>

                    <!-- Видео 2 -->
                    <div class="rounded-8 bg-white p-6 shadow-md">
                        <h3 class="mb-4 text-lg font-semibold text-gray-800">
                            Завод промышленных станков SnabExport. Проверка
                            качества.
                        </h3>
                        <div class="rounded-8 overflow-hidden">
                            <iframe
                                width="100%"
                                height="250"
                                src="https://rutube.ru/play/embed/98ab835cd29d77d17fd597966b74f829/"
                                frameBorder="0"
                                allow="clipboard-write; autoplay"
                                webkitAllowFullScreen
                                mozallowfullscreen
                                allowFullScreen
                                class="rounded-8"
                            ></iframe>
                        </div>
                    </div>

                    <!-- Видео 3 -->
                    <div class="rounded-8 bg-white p-6 shadow-md">
                        <h3 class="mb-4 text-lg font-semibold text-gray-800">
                            Обучение на станке для СНП SNAB
                        </h3>
                        <div class="rounded-8 overflow-hidden">
                            <iframe
                                width="100%"
                                height="250"
                                src="https://rutube.ru/play/embed/4b7c001aafe348ada404a6be283562e0"
                                frameborder="0"
                                allow="clipboard-write; autoplay"
                                webkitallowfullscreen
                                mozallowfullscreen
                                allowfullscreen
                                class="rounded-8"
                            ></iframe>
                        </div>
                    </div>

                    <!-- Видео 4 -->
                    <div class="rounded-8 bg-white p-6 shadow-md">
                        <h3 class="mb-4 text-lg font-semibold text-gray-800">
                            Металорезка
                        </h3>
                        <div class="rounded-8 overflow-hidden">
                            <iframe
                                width="100%"
                                height="250"
                                src="https://rutube.ru/play/embed/a8327529fa692028eb02672f0b1511e2/"
                                frameBorder="0"
                                allow="clipboard-write; autoplay"
                                webkitAllowFullScreen
                                mozallowfullscreen
                                allowFullScreen
                                class="rounded-8"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Сертификаты -->
        <div class="section-default">
            <div class="section-container">
                <!-- Категории продукции -->
                <div class="space-y-12">
                    <div
                        v-for="category in companyDocuments"
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
                                v-for="document in category.documents"
                                :key="document.id"
                                class="company-card group"
                            >
                                <div
                                    class="rounded-8 flex h-full flex-col bg-white p-6 shadow-md transition-all duration-300 hover:shadow-xl"
                                >
                                    <div
                                        class="mb-4 flex h-24 items-center justify-center"
                                    >
                                        <img
                                            :src="document.image_name"
                                            :alt="document.name"
                                            class="h-16 max-w-[200px] object-contain"
                                        />
                                    </div>
                                    <div
                                        class="text-center text-lg font-medium text-gray-900"
                                    >
                                        {{ document.name }}
                                    </div>
                                    <div
                                        class="mt-4 grid grid-cols-2 justify-items-center gap-4 md:grid-cols-1 lg:grid-cols-2"
                                    >
                                        <a
                                            :href="document.file_name"
                                            target="_blank"
                                            rel="noopener noreferrer"
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

                                            Скачать документ
                                        </a>
                                        <button
                                            @click="
                                                openLightbox(
                                                    document.image_name,
                                                    document.name,
                                                )
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

                                            Увеличить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Контакты -->
        <section class="section-default bg-primary text-white">
            <div class="section-container">
                <div class="text-center">
                    <h2 class="mb-6 text-3xl font-bold">
                        Готовы к сотрудничеству?
                    </h2>
                    <p class="mb-8 text-xl opacity-90">
                        Свяжитесь с нами для получения консультации по
                        оборудованию и услугам
                    </p>
                    <div class="flex flex-col justify-center gap-4 md:flex-row">
                        <a
                            href="tel:+78123941246"
                            class="text-primary rounded-8 bg-white px-8 py-3 font-semibold transition-colors hover:bg-gray-100"
                        >
                            +7 (812) 394-12-46
                        </a>
                        <a
                            href="mailto:info@snabexport.spb.ru"
                            class="rounded-8 hover:text-primary border-2 border-white bg-transparent px-8 py-3 font-semibold text-white transition-colors hover:bg-white"
                        >
                            info@snabexport.spb.ru
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lightbox для увеличения изображений сертификатов -->
        <Teleport to="body">
            <div
                v-if="isLightboxOpen"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/75 p-4"
                @click="closeLightbox"
            >
                <div
                    class="relative max-h-[90vh] max-w-[90vw] overflow-hidden rounded-lg bg-white shadow-2xl"
                    @click.stop
                >
                    <!-- Заголовок -->
                    <div class="border-b border-gray-200 px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800">
                            {{ lightboxTitle }}
                        </h3>
                    </div>

                    <!-- Изображение -->
                    <div class="flex items-center justify-center p-6">
                        <img
                            :src="lightboxImage"
                            :alt="lightboxTitle"
                            class="max-h-[70vh] max-w-full object-contain"
                        />
                    </div>

                    <!-- Кнопка закрытия -->
                    <button
                        @click="closeLightbox"
                        class="absolute top-4 right-4 rounded-full bg-gray-100 p-2 text-gray-600 transition-colors hover:bg-gray-200 hover:text-gray-800"
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
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </Teleport>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";
import Advantages from "@/Components/Advantages.vue";
import { ref } from "vue";

defineProps({
    companyDocuments: {
        type: Array,
        required: true,
    },
});

// Lightbox состояние
const isLightboxOpen = ref(false);
const lightboxImage = ref("");
const lightboxTitle = ref("");

// Функции для lightbox
const openLightbox = (imageSrc, title) => {
    lightboxImage.value = imageSrc;
    lightboxTitle.value = title;
    isLightboxOpen.value = true;
    document.body.style.overflow = "hidden";
};

const closeLightbox = () => {
    isLightboxOpen.value = false;
    document.body.style.overflow = "auto";
};

// Закрытие по клавише Escape
const handleKeydown = (event) => {
    if (event.key === "Escape" && isLightboxOpen.value) {
        closeLightbox();
    }
};

// Подключение обработчика клавиатуры
if (typeof window !== "undefined") {
    document.addEventListener("keydown", handleKeydown);
}
</script>
