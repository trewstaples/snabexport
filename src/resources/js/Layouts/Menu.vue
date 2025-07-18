<template>
    <div class="mx-auto max-w-7xl py-4">
        <div class="flex items-center justify-between">
            <!-- Логотип -->
            <Logo />

            <!-- Десктопное меню -->
            <nav class="text-main hidden space-x-8 font-medium lg:flex">
                <a
                    v-for="item in menuItems"
                    :key="item.name"
                    :href="item.href"
                    :class="[
                        'text-lg transition-colors duration-200',
                        isActivePage(item.href)
                            ? 'text-secondary'
                            : 'text-primary hover:text-secondary',
                    ]"
                >
                    {{ item.name }}
                </a>
            </nav>

            <!-- Мобильные кнопки (поиск и меню) -->
            <MobileMenu />
        </div>
    </div>
</template>

<script setup>
import Logo from "./Logo.vue";
import MobileMenu from "./Mobile/MobileMenu.vue";
import { menuItems, isActivePage } from "@/utils";
</script>
