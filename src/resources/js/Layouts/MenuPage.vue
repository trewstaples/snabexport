<template>
    <div class="fixed inset-0 z-50 overflow-y-auto bg-white">
        <!-- Шапка -->
        <div
            class="flex items-center justify-between border-b border-gray-200 p-4"
        >
            <h2 class="text-primary text-xl font-bold">Меню</h2>
            <button
                @click="$emit('close')"
                class="hover:text-primary text-gray-500"
            >
                <svg
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
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

        <!-- Основные ссылки -->
        <div class="space-y-4 p-4">
            <a
                v-for="item in mainLinks"
                :key="item.name"
                :href="item.href"
                class="text-main text-primary hover:text-secondary block transition-colors duration-200"
            >
                {{ item.name }}
            </a>
        </div>
    </div>
</template>

<script setup>
const mainLinks = [
    { name: "Аренда", href: "/rent" },
    { name: "Сервис", href: "/service" },
    { name: "Новости", href: "/news" },
    { name: "Статьи", href: "/articles" },
    { name: "Видео", href: "/video" },
    { name: "О компании", href: "/about" },
    { name: "Контакты", href: "/contacts" },
];
</script>
