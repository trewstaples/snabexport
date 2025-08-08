<template>
    <Layout :title="selectedCategory?.name">
        <div class="section-default">
            <div class="section-container">
                <!-- Основной контент -->
                <div class="flex flex-col gap-8 md:flex-row">
                    <Sidebar :categories="categories" />

                    <!-- Секция с товарами -->
                    <ProductsList :products="products" />
                </div>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";
import Sidebar from "@/Components/Catalog/Sidebar.vue";
import ProductsList from "@/Components/Catalog/ProductsList.vue";
import { useCategoriesStore } from "@/stores/categories";
import { onBeforeMount, onMounted } from "vue";
import { storeToRefs } from "pinia";

const store = useCategoriesStore();
const { selectedCategory } = storeToRefs(store);

const props = defineProps({
    categories: {
        type: Array,
        default: () => [],
    },
    products: {
        type: Array,
        default: () => [],
    },
});

const findCategory = (categories) => {
    for (const category of categories) {
        if (window.location.pathname === category.url) {
            return category;
        }
        if (category.all_children?.length) {
            const child = findCategory(category.all_children);
            if (child) {
                store.toggleExpandedCategories(category.id); // раскрываем родителя
                return child;
            }
        }
    }
    return null;
};

onBeforeMount(() => {
    const activeCategory = findCategory(props.categories);
    if (activeCategory) {
        store.selectCategory(activeCategory);
    }
});
</script>
