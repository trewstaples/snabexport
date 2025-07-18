<template>
    <section class="section-default">
        <div class="section-container">
            <h2 class="section-title">Услуги</h2>

            <!-- Сетка сервисов -->
            <div
                class="grid-adaptive-gap grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
            >
                <a
                    v-for="service in services"
                    :key="service.id"
                    :href="'/' + service.slug"
                    class="group rounded-8 flex flex-col overflow-hidden bg-white shadow-md transition-all duration-300 hover:shadow-xl"
                >
                    <div
                        class="relative flex h-48 items-center justify-center overflow-hidden"
                    >
                        <img
                            :src="service.image_name"
                            :alt="service.name"
                            class="h-20 w-20 object-contain text-blue-600"
                        />
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3
                            class="text-primary mb-2 text-center align-middle text-xl font-semibold"
                        >
                            {{ service.name }}
                        </h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
defineProps({
    services: {
        type: Array,
        required: true,
    },
});
</script>
