<template>
    <div class="space-y-2">
        <div class="flex items-center justify-between">
            <span class="text-2xl font-semibold text-gray-900">
                {{ displayPrice }}
            </span>
            <button
                class="rounded-lg bg-blue-600 px-8 py-3 text-white transition-colors hover:bg-blue-700"
            >
                В корзину
            </button>
        </div>

        <!-- Информация о выбранной модели -->
        <div v-if="selectedModel" class="text-sm text-gray-600">
            <span class="font-medium">Выбрана модель:</span>
            {{ selectedModel.model_name }}
        </div>
    </div>
</template>

<script setup>
import { computed } from "vue";

const props = defineProps({
    product: {
        type: Object,
        required: true,
    },
    selectedModel: {
        type: Object,
        default: null,
    },
});

const displayPrice = computed(() => {
    // Если есть выбранная модель с ценой, показываем её
    if (props.selectedModel && props.selectedModel.price) {
        return `${props.selectedModel.price} ₽`;
    }

    // Иначе показываем цену продукта или "по запросу"
    return props.product.price ? `${props.product.price} ₽` : "Цена по запросу";
});
</script>
