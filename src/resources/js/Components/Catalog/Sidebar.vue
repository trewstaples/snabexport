<template>
    <!-- Боковая панель с категориями -->
    <aside class="max-w-70 flex-shrink-0">
        <div class="space-y-3">
            <!-- Категории как выпадающие блоки -->
            <div
                v-for="category in props.categories"
                :key="category.id"
                class="overflow-hidden rounded-lg bg-gray-100"
            >
                <button
                    @click="handleCategoryClick(category)"
                    :class="[
                        'flex w-full cursor-pointer items-center justify-between px-4 py-3 text-left transition-colors',
                        isCategorySelected(category)
                            ? 'bg-blue-100 text-blue-600'
                            : 'text-gray-900 hover:text-blue-600',
                    ]"
                >
                    <span class="font-medium">{{ category.name }}</span>

                    <div class="flex items-center gap-2">
                        <svg
                            v-if="category.all_children.length"
                            @click.stop="toggleExpandedCategories(category.id)"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            :class="[
                                'size-5 transition-transform duration-200',
                                isCategorySelected(category)
                                    ? 'text-blue-600'
                                    : 'text-gray-600',
                                isCategoryExpanded(category.id)
                                    ? 'rotate-180'
                                    : '',
                            ]"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m19.5 8.25-7.5 7.5-7.5-7.5"
                            />
                        </svg>
                    </div>
                </button>

                <!-- Подкатегории -->
                <div
                    v-if="
                        isCategoryExpanded(category.id) &&
                        category.all_children &&
                        category.all_children.length > 0
                    "
                    class="border-t border-gray-200 bg-white"
                >
                    <div class="px-4 py-2">
                        <CategoryTree
                            v-for="child in category.all_children"
                            :key="child.id"
                            :category="child"
                        />
                    </div>
                </div>
            </div>
        </div>
    </aside>
</template>

<script setup>
import CategoryTree from "@/Components/Catalog/CategoryTree.vue";
import { onMounted } from "vue";
import { useCategoriesStore } from "@/stores/categories";
import { router } from "@inertiajs/vue3";

const props = defineProps({
    categories: {
        type: Array,
        required: true,
    },
});

const {
    selectCategory,
    toggleExpandedCategories,
    isCategorySelected,
    isCategoryExpanded,
} = useCategoriesStore();

// Инициализируем первую категорию как активную по умолчанию
const checkIfActive = (category) => {
    if (window.location.pathname === category.url) {
        if (category.id === 1) {
            console.log(123);
        }
        return category;
    }

    if (category.all_children) {
        for (let child of category.all_children) {
            let activeChild = checkIfActive(child);
            if (activeChild) {
                return activeChild;
            }
        }
    }

    return null;
};

const findCategory = (categories) => {
    for (const category of categories) {
        if (window.location.pathname === category.url) {
            return category;
        }
        if (category.all_children?.length) {
            const child = findCategory(category.all_children);
            if (child) {
                toggleExpandedCategories(category.id); // раскрываем родителя
                return child;
            }
        }
    }
    return null;
};

onMounted(() => {
    if (window.location.pathname === "/online-store") {
        selectCategory(props.categories[0]);
        return;
    }

    const activeCategory = findCategory(props.categories);
    if (activeCategory) {
        selectCategory(activeCategory);
    }
});

const handleCategoryClick = (category) => {
    selectCategory(category);
    router.visit(category.url, {
        preserveScroll: true,
        preserveState: true,
    });
};
</script>
