<template>
    <section class="section-default">
        <div class="section-container">
            <h2 class="section-title">Преимущества работы с нами</h2>

            <!-- Сетка преимуществ -->
            <div
                class="grid-adaptive-gap grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
            >
                <div
                    v-for="advantage in advantages"
                    class="rounded-8 flex items-start p-6 transition-all duration-300 hover:shadow-lg"
                >
                    <div
                        class="bg-primary/10 mr-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full"
                    >
                        <svg
                            class="text-primary h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                v-for="path in advantage.paths"
                                :key="path"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                :d="path"
                            />
                        </svg>
                    </div>
                    <div>
                        <h3
                            class="text-primary mb-2 text-lg font-semibold md:text-xl"
                        >
                            {{ advantage.title }}
                        </h3>
                        <p class="text-gray-600">
                            {{ advantage.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const advantages = [
    {
        title: "Наш опыт",
        description: "За 12 лет работы мы реализовали более 300 проектов",
        paths: [
            "M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5",
        ],
    },
    {
        title: "Комплексный подход",
        description: "Всесторонний подход к решению задач клиентов",
        paths: [
            "M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z",
            "M15 12a3 3 0 11-6 0 3 3 0 016 0z",
        ],
    },
    {
        title: "Гибкость и адаптивность",
        description: "Способность перестраиваться под быстро меняющийся рынок",
        paths: [
            "M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15",
        ],
    },
    {
        title: "Цена",
        description: "Справедливые цены на каждый товар",
        paths: [
            "M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z",
        ],
    },
    {
        title: "Лучшее предложение на рынке",
        description:
            "Постоянный мониторинг рынка, поиск лучших товаров для наших клиентов",
        paths: [
            "M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z",
        ],
    },
    {
        title: "Гарантия и сервис",
        description: "Гарантийные сроки и развитое постпродажное обслуживание",
        paths: [
            "M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z",
        ],
    },
];
</script>
