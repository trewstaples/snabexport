import { defineStore } from "pinia";
import { ref } from "vue";

export const useCategoriesStore = defineStore("categories", () => {
    const selectedCategory = ref(null);
    const expandedCategories = ref(new Set());

    const selectCategory = (category) => {
        selectedCategory.value = category;
    };

    const toggleExpandedCategories = (categoryId) => {
        if (expandedCategories.value.has(categoryId)) {
            expandedCategories.value.delete(categoryId);
        } else {
            expandedCategories.value.add(categoryId);
        }
    };

    const isCategorySelected = (category) => {
        if (!selectedCategory.value) return false;

        if (selectedCategory.value.id === category.id) {
            return true;
        }

        if (!category.all_children) return false;

        for (const child of category.all_children) {
            if (child.id === selectedCategory.value.id) {
                return true;
            }
            if (child.all_children && isCategorySelected(child)) {
                return true;
            }
        }

        return false;
    };

    const isCategoryExpanded = (categoryId) => {
        return expandedCategories.value.has(categoryId);
    };

    return {
        selectedCategory,
        expandedCategories,
        selectCategory,
        toggleExpandedCategories,
        isCategorySelected,
        isCategoryExpanded,
    };
});
