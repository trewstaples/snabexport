<template>
    <div>
        <!-- Хедер (всегда виден) -->
        <header class="bg-white shadow-lg border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Логотип и название компании (всегда видны) -->
                    <div class="flex items-center space-x-3">
                        <!-- Логотип -->
                        <div class="flex-shrink-0">
                            <img
                                class="h-[var(--logo-size)] w-[var(--logo-size)]"
                                :src="logoUrl"
                                alt="СнабЭкспорт ПРО"
                            />
                        </div>

                        <!-- Название компании -->
                        <div class="text-logo font-bold text-primary">
                            <span>Снаб</span
                            ><span class="text-secondary">Экспорт </span>
                            <span>ПРО</span>
                        </div>
                    </div>

                    <!-- Десктопное меню (показывается при ширине ≥1000px) -->
                    <nav class="hidden lg:flex space-x-8 text-main font-medium">
                        <a
                            v-for="item in menuItems"
                            :key="item.name"
                            :href="item.href"
                            :class="[
                                'px-3 py-2 transition-colors duration-200',
                                isActivePage(item.href)
                                    ? 'text-secondary'
                                    : 'text-primary hover:text-secondary',
                            ]"
                        >
                            {{ item.name }}
                        </a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Мобильное нижнее меню (показывается при ширине <1000px) -->
        <nav
            class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200"
        >
            <div class="flex justify-around items-center h-16">
                <a
                    v-for="item in mobileMenuItems"
                    :key="item.name"
                    :href="item.href"
                    @click="item.action && item.action($event)"
                    :class="[
                        'flex flex-col items-center justify-center w-full py-2 text-sm transition-colors duration-200',
                        isActivePage(item.href)
                            ? 'text-secondary'
                            : 'text-primary hover:text-secondary',
                    ]"
                >
                    <!-- Иконки -->
                    <svg
                        v-if="item.name === 'Каталог'"
                        class="w-6 h-6 mb-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                    <svg
                        v-else-if="item.name === 'Корзина'"
                        class="w-6 h-6 mb-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                        />
                    </svg>
                    <svg
                        v-else-if="item.name === 'Главная'"
                        class="w-6 h-6 mb-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                        />
                    </svg>
                    <svg
                        v-else-if="item.name === 'Меню'"
                        class="w-6 h-6 mb-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                    <span>{{ item.name }}</span>
                </a>
            </div>
        </nav>

        <!-- Мобильная страница меню -->
        <MenuPage v-if="isMenuOpen" @close="isMenuOpen = false" />
    </div>
</template>

<script setup>
import { ref } from "vue";
import MenuPage from "./MenuPage.vue";

const logoUrl = "/logo.svg";
const isMenuOpen = ref(false);

// Элементы десктопного меню
const menuItems = [
    {
        name: "Главная",
        href: "/",
    },
    {
        name: "Каталог",
        href: "/catalog",
    },
    {
        name: "Аренда",
        href: "/rent",
    },
    {
        name: "Сервис",
        href: "/service",
    },
    {
        name: "О компании",
        href: "/about",
    },
    {
        name: "Контакты",
        href: "/contacts",
    },
];

// Элементы мобильного меню
const mobileMenuItems = [
    {
        name: "Главная",
        href: "/",
    },
    {
        name: "Каталог",
        href: "/catalog",
    },
    {
        name: "Корзина",
        href: "/cart",
    },
    {
        name: "Меню",
        href: "#",
        action: (e) => {
            e.preventDefault();
            isMenuOpen.value = true;
        },
    },
];

// Функция определения активной страницы
const isActivePage = (href) => {
    if (href === "#") return false;
    // Для главной страницы проверяем точное совпадение
    if (href === "/") {
        return window.location.pathname === href;
    }
    // Для остальных страниц проверяем, начинается ли путь с href
    return window.location.pathname.startsWith(href);
};
</script>

<style scoped>
/* Добавляем отступ для контента, чтобы он не перекрывался нижним меню на мобильных */
:deep(.main-content) {
    @media (max-width: 999px) {
        padding-bottom: 4rem; /* 64px для нижнего меню */
    }
}
</style>
