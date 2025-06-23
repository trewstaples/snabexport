<template>
    <div class="fixed inset-0 bg-white z-50 overflow-y-auto">
        <!-- Шапка -->
        <div
            class="flex justify-between items-center p-4 border-b border-gray-200"
        >
            <h2 class="text-xl font-bold text-primary">Меню</h2>
            <button
                @click="$emit('close')"
                class="text-gray-500 hover:text-primary"
            >
                <svg
                    class="w-6 h-6"
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
        <div class="p-4 space-y-4">
            <a
                v-for="item in mainLinks"
                :key="item.name"
                :href="item.href"
                class="block text-main text-primary hover:text-secondary transition-colors duration-200"
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
