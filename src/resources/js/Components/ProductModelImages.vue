<template>
    <div
        v-if="model && model.images && model.images.length > 0"
        class="space-y-4"
    >
        <h3 class="text-lg font-semibold text-gray-900">
            Изображения модели {{ model.model_name }}
        </h3>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
            <div
                v-for="image in model.images"
                :key="image.id"
                class="aspect-square overflow-hidden rounded-lg border border-gray-200"
            >
                <picture>
                    <source
                        :type="'image/webp'"
                        :srcset="`${image.name}.webp, ${image.name}@2x.webp 2x`"
                    />
                    <img
                        :src="`${image.name}.jpg`"
                        :srcset="`${image.name}@2x.jpg 2x`"
                        class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        :alt="`${model.model_name} - изображение`"
                        loading="lazy"
                    />
                </picture>
            </div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    model: {
        type: Object,
        required: true,
    },
});
</script>
