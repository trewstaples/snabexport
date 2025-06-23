<template>
    <section class="py-16 px-4">
        <div class="container mx-auto">
            <h1 class="text-3xl text-center text-primary font-bold mb-12">
                {{ title }}
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a
                    v-for="category in categories"
                    :key="category.id"
                    :href="category.link"
                    class="group"
                >
                    <div class="aspect-video mb-4 overflow-hidden rounded-lg">
                        <img
                            :src="category.image"
                            :alt="category.title"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                    </div>
                    <h2 class="text-xl font-semibold text-primary mb-2">
                        {{ category.title }}
                    </h2>
                    <p class="text-sm text-gray-500">{{ category.brands }}</p>
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
import industrialHydraulics from "@img/industrial-hydraulics.webp";
import sealsManufacture from "@img/seals-manufacture-equipment.webp";
import metalworking from "@img/metalworking-equipment.webp";
import bearings from "@img/bearings.webp";
import vacuumCleaner from "@img/vacuum-сleaner.webp";
import circularSaw from "@img/circular-saw.webp";

const title = "Продажа промышленного оборудования и инструмента";

const categories = [
    {
        id: 1,
        title: "Промышленная гидравлика",
        brands: "ENERPAC, BOSCH REXROTH, SNAB",
        image: industrialHydraulics,
        link: "/catalog/hydraulics",
    },
    {
        id: 2,
        title: "Оборудование и материалы для изготовления уплотнений",
        brands: "НАМОТОЧНЫЕ СТАНКИ, СТАНКИ И МАТЕРИАЛЫ ДЛЯ ИЗГОТОВЛЕНИЯ УПЛОТНЕНИЙ",
        image: sealsManufacture,
        link: "/catalog/seals",
    },
    {
        id: 3,
        title: "Металло-обрабатывающее оборудование",
        brands: "ОТЕЧЕСТВЕННОЕ ОБОРУДОВАНИЕ, ИМПОРТНОЕ ОБОРУДОВАНИЕ, РЕМОНТ СТАНКОВ",
        image: metalworking,
        link: "/catalog/metalworking",
    },
    {
        id: 4,
        title: "Подшипники",
        brands: "SKF, INA / FAG, KOYO, SNR",
        image: bearings,
        link: "/catalog/bearings",
    },
    {
        id: 5,
        title: "Промышленные пылесосы и оборудование для клининга",
        brands: "TENNANT, IPC, DELFIN, GAUSIUM",
        image: vacuumCleaner,
        link: "/catalog/vacuum-cleaners",
    },
    {
        id: 6,
        title: "Инструмент / Автосервис",
        brands: "BAHCO, CHICAGO PNEUMATIC, KARCHER, MAXIMA, HANS, JTC AUTO TOOLS",
        image: circularSaw,
        link: "/catalog/tools",
    },
];
</script>
