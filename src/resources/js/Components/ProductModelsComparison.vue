<template>
    <div class="space-y-4">
        <h2 class="text-xl font-semibold text-gray-900">Модели</h2>

        <!-- Селект моделей -->
        <div class="relative">
            <select
                v-model="selectedModel"
                @change="handleModelChange"
                class="w-full appearance-none rounded-lg border-2 border-gray-200 bg-white px-4 py-3 pr-10 font-medium text-gray-900 transition-all duration-200 hover:border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none"
            >
                <option
                    v-for="model in models"
                    :key="model.id"
                    :value="model"
                    class="font-medium"
                >
                    {{ model.model_name }}
                </option>
            </select>

            <!-- Иконка стрелки -->
            <div
                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3"
            >
                <svg
                    class="h-5 w-5 text-gray-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19 9l-7 7-7-7"
                    ></path>
                </svg>
            </div>
        </div>

        <!-- Спецификации выбранной модели -->
        <div
            v-if="selectedModel && selectedModel.specifications"
            class="space-y-3"
        >
            <h3 class="text-lg font-semibold text-gray-900">
                Технические характеристики
            </h3>
            <div
                v-for="specification in selectedModel.specifications"
                :key="specification.name"
                class="flex items-baseline gap-2"
            >
                <span
                    class="max-w-[150px] min-w-0 flex-shrink-0 leading-relaxed font-medium break-normal text-gray-700 sm:max-w-none sm:min-w-[200px] lg:min-w-[250px]"
                >
                    {{ specification.name }}
                </span>
                <span
                    class="mx-2 min-w-4 flex-1 border-b border-dotted border-gray-300"
                ></span>
                <span
                    class="max-w-[150px] min-w-0 flex-shrink-0 text-left leading-relaxed font-normal break-normal text-gray-500 sm:max-w-[300px]"
                >
                    {{ specification.value }}
                </span>
            </div>
        </div>

        <!-- Сообщение если нет спецификаций -->
        <div v-else-if="selectedModel" class="text-gray-500 italic">
            Спецификации для данной модели не указаны
        </div>

        <!-- Изображения выбранной модели -->
        <div v-if="selectedModel" class="mt-6">
            <ProductModelImages :model="selectedModel" />
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import ProductModelImages from "./ProductModelImages.vue";

const props = defineProps({
    models: {
        type: Array,
        required: true,
    },
    defaultModelId: {
        type: Number,
        default: null,
    },
});

const emit = defineEmits(["model-selected"]);

const selectedModel = ref(null);

const handleModelChange = () => {
    if (selectedModel.value) {
        emit("model-selected", selectedModel.value);
    }
};

// Инициализируем выбранную модель
if (props.models.length > 0 && !selectedModel.value) {
    const defaultModel = props.defaultModelId
        ? props.models.find((m) => m.id === props.defaultModelId)
        : props.models[0];
    if (defaultModel) {
        selectedModel.value = defaultModel;
        emit("model-selected", defaultModel);
    }
}
</script>
