<template>
    <div class="category-item-minimal">
        <div
            class="flex cursor-pointer items-center justify-between rounded py-2 transition-colors"
        >
            <div class="flex flex-1 items-center">
                <span
                    @click.stop="handleCategoryClick(category)"
                    :class="[
                        'text-sm transition-colors select-none',
                        isCategorySelected(category)
                            ? 'text-blue-600'
                            : 'text-gray-600 hover:text-blue-600',
                    ]"
                >
                    {{ category.name }}
                </span>
            </div>

            <div class="flex items-center gap-2">
                <svg
                    v-if="category.all_children.length"
                    @click="toggleExpandedCategories(category.id)"
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
                        isCategoryExpanded(category.id) ? 'rotate-180' : '',
                    ]"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m19.5 8.25-7.5 7.5-7.5-7.5"
                    />
                </svg>
            </div>
        </div>

        <!-- Дочерние категории -->
        <div
            v-if="
                isCategoryExpanded(category.id) &&
                category.all_children &&
                category.all_children.length > 0
            "
            class="mt-1 ml-6 space-y-1"
        >
            <CategoryTree
                v-for="child in category.all_children"
                :key="child.id"
                :category="child"
            />
        </div>
    </div>
</template>

<script setup>
import { useCategoriesStore } from "@/stores/categories";
import { router } from "@inertiajs/vue3";

const {
    selectCategory,
    toggleExpandedCategories,
    isCategorySelected,
    isCategoryExpanded,
} = useCategoriesStore();

const props = defineProps({
    category: {
        type: Object,
        required: true,
    },
});

const handleCategoryClick = (category) => {
    selectCategory(category);
    router.visit(category.url, {
        preserveScroll: true,
        preserveState: true,
    });
};
</script>

<style scoped>
.category-item-minimal {
    font-family: inherit;
}
</style>
