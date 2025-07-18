<template>
    <div class="flex items-center lg:hidden">
        <!-- Поиск -->
        <div class="relative flex items-center">
            <div
                class="absolute top-1/2 right-0 flex h-10 -translate-y-1/2 items-center bg-white transition-all duration-300"
                :class="[
                    isSearchOpen
                        ? 'w-[calc(100vw-5rem)] -translate-x-2'
                        : 'w-10',
                    'z-10',
                ]"
            >
                <input
                    v-show="isSearchOpen"
                    ref="searchInput"
                    v-model="searchQuery"
                    type="text"
                    placeholder="Поиск"
                    class="h-full w-full px-4 text-base text-gray-900 placeholder-gray-400 focus:outline-none"
                />
                <button
                    @click="toggleSearch"
                    class="hover:text-primary flex h-10 w-10 shrink-0 items-center justify-center text-gray-600"
                >
                    <svg
                        v-if="!isSearchOpen"
                        class="size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                        />
                    </svg>
                    <svg
                        v-else
                        class="size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Бургер-меню -->
        <button
            @click="toggleMenu"
            class="hover:text-primary ml-2 flex h-10 w-10 items-center justify-center text-gray-600"
        >
            <svg
                v-if="!isMenuOpen"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                />
            </svg>

            <svg
                v-else
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </button>

        <!-- Мобильное меню -->
        <div
            v-if="isMenuOpen"
            class="fixed inset-0 z-50"
            @click="isMenuOpen = false"
        >
            <!-- Затемнение фона -->
            <div class="bg-opacity-50 absolute inset-0 bg-black"></div>

            <!-- Меню -->
            <div class="absolute inset-0 h-full w-full bg-white" @click.stop>
                <!-- Шапка меню -->
                <div class="flex items-center justify-end p-4">
                    <button
                        class="text-gray-500 hover:text-gray-700"
                        @click="isMenuOpen = false"
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

                <!-- Пункты меню -->
                <nav
                    class="flex h-[calc(100%-5rem)] flex-col items-center justify-center"
                >
                    <a
                        v-for="item in menuItems"
                        :key="item.name"
                        :href="item.href"
                        :class="[
                            'block w-full px-6 py-4 text-center transition-colors duration-200',
                            'text-lg sm:text-xl md:text-2xl',
                            isActivePage(item.href)
                                ? 'text-secondary'
                                : 'text-primary hover:text-secondary hover:bg-gray-50',
                        ]"
                        @click="isMenuOpen = false"
                    >
                        {{ item.name }}
                    </a>
                </nav>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { menuItems, isActivePage } from "@/utils";

const isMenuOpen = ref(false);
const isSearchOpen = ref(false);
const searchQuery = ref("");
const searchInput = ref(null);

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
    if (isMenuOpen.value) {
        isSearchOpen.value = false;
    }
};

const toggleSearch = () => {
    isSearchOpen.value = !isSearchOpen.value;
    if (isSearchOpen.value) {
        isMenuOpen.value = false;
        // Фокус на поле поиска после открытия
        setTimeout(() => {
            searchInput.value?.focus();
        }, 100);
    }
};
</script>

<style scoped>
.search-container {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    height: 2.5rem;
    align-items: center;
    gap: 0.5rem;
    overflow: hidden;
    background-color: white;
    transition: all 0.3s;
}
</style>
