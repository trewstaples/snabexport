<template>
    <div class="category-item-minimal">
        <div
            @click.stop="handleCategoryClick(category)"
            :class="[
                'flex cursor-pointer items-center justify-between rounded px-2 py-2 transition-colors',
                isCategorySelected(category)
                    ? 'bg-primary/10 border-primary border-l-4'
                    : 'hover:bg-gray-100',
            ]"
        >
            <div class="flex flex-1 items-center">
                <span
                    :class="[
                        'text-sm transition-colors select-none',
                        isCategorySelected(category)
                            ? 'text-primary font-semibold'
                            : 'text-gray-600 hover:text-gray-900',
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
                            ? 'text-primary'
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
                @toggle-mobile-sidebar="toggleMobileSidebar"
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

const emit = defineEmits(["toggle-mobile-sidebar"]);

const toggleMobileSidebar = () => {
    emit("toggle-mobile-sidebar");
};

const handleCategoryClick = (category) => {
    selectCategory(category);
    emit("toggle-mobile-sidebar");
    router.visit(category.url, {
        preserveScroll: false,
        preserveState: true,
    });
};
</script>

<style scoped>
.category-item-minimal {
    font-family: inherit;
}
</style>
