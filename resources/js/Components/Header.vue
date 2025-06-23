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
                        v-else-if="item.name === 'Услуги'"
                        class="w-6 h-6 mb-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
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
        name: "Услуги",
        href: "/services",
    },
    {
        name: "О Компании",
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
        name: "Каталог",
        href: "/catalog",
    },
    {
        name: "Корзина",
        href: "/cart",
    },
    {
        name: "Услуги",
        href: "/services",
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
