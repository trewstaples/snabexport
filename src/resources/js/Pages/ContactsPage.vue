<template>
    <Layout title="Контакты">
        <!-- Главный заголовок -->
        <section
            class="section-default bg-gradient-to-r from-blue-50 to-indigo-50"
        >
            <div class="section-container">
                <div class="text-center">
                    <h1
                        class="text-primary mb-4 text-4xl font-bold md:text-5xl"
                    >
                        Контакты
                    </h1>
                    <p class="mx-auto max-w-3xl text-xl text-gray-600">
                        Свяжитесь с нами любым удобным способом
                    </p>
                </div>
            </div>
        </section>

        <!-- Контактная информация -->
        <section class="section-default">
            <div class="section-container">
                <div
                    class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4"
                >
                    <!-- Телефоны -->
                    <div class="rounded-8 bg-white p-6 shadow-md">
                        <h2 class="text-primary mb-4 text-2xl font-bold">
                            Телефоны
                        </h2>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg
                                    class="h-5 w-5 text-blue-600"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                    />
                                </svg>
                                <div>
                                    <a
                                        href="tel:+78123941246"
                                        class="text-primary font-semibold transition-colors hover:text-blue-600"
                                    >
                                        +7 (812) 394-12-46
                                    </a>
                                    <span class="text-gray-600"> – офис</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg
                                    class="h-5 w-5 text-blue-600"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                    />
                                </svg>
                                <div>
                                    <a
                                        href="tel:+78123003661"
                                        class="text-primary font-semibold transition-colors hover:text-blue-600"
                                    >
                                        +7 (812) 300-36-61
                                    </a>
                                    <span class="text-gray-600">
                                        – отдел продаж</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Почта -->
                    <div class="rounded-8 bg-white p-6 shadow-md">
                        <h2 class="text-primary mb-4 text-2xl font-bold">
                            Электронная почта
                        </h2>
                        <div class="flex items-center gap-3">
                            <svg
                                class="h-5 w-5 text-blue-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                />
                            </svg>
                            <a
                                href="mailto:info@snabexport.spb.ru"
                                class="text-primary font-semibold transition-colors hover:text-blue-600"
                            >
                                info@snabexport.spb.ru
                            </a>
                        </div>
                    </div>

                    <!-- Рабочие дни -->
                    <div class="rounded-8 bg-white p-6 shadow-md">
                        <h2 class="text-primary mb-4 text-2xl font-bold">
                            Режим работы
                        </h2>
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <svg
                                    class="h-5 w-5 text-blue-600"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                    />
                                </svg>
                                <span class="font-semibold text-gray-700"
                                    >пн-пт:</span
                                >
                                <span class="text-gray-600">9:00 - 17:30</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg
                                    class="h-5 w-5 text-red-500"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                                <span class="font-semibold text-gray-700"
                                    >сб-вс:</span
                                >
                                <span class="text-red-500">выходной</span>
                            </div>
                        </div>
                    </div>

                    <!-- Адрес -->
                    <div class="rounded-8 bg-white p-6 shadow-md">
                        <h2 class="text-primary mb-4 text-2xl font-bold">
                            Адрес
                        </h2>
                        <div class="flex items-start gap-3">
                            <svg
                                class="mt-1 h-5 w-5 text-blue-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                            </svg>
                            <div>
                                <p class="leading-relaxed text-gray-700">
                                    197348, г. Санкт-Петербург,<br />
                                    ул. Аэродромная, д. 6, литера А,<br />
                                    пом. 1-Н, пом. 202
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Карта -->
        <section class="section-default bg-gray-50">
            <div class="section-container">
                <h2 class="section-title mb-8 text-center">Как нас найти</h2>
                <div class="rounded-8 bg-white p-6 shadow-md">
                    <div class="rounded-8 aspect-[16/9] overflow-hidden">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?text=197348%2C%20г.%20Санкт-Петербург%2C%20ул.%20Аэродромная%2C%20д.%206%2C%20литера%20А%2C%20пом.%201-Н%2C%20пом.%20202&amp;sll=30.195%2C59.785&amp;sspn=0.015%2C0.010&amp;l=map&amp;z=16"
                            class="h-full w-full border-0"
                            title="Карта местоположения ООО СнабЭкспорт"
                            allowfullscreen
                        >
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- Реквизиты -->
        <section class="section-default">
            <div class="section-container">
                <h2 class="section-title mb-8 text-center">Реквизиты</h2>
                <div class="rounded-8 bg-white p-8 shadow-md">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Основные реквизиты -->
                        <div class="space-y-4">
                            <h3 class="text-primary mb-4 text-xl font-bold">
                                Основные реквизиты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[140px] font-semibold text-gray-700"
                                        >Наименование:</span
                                    >
                                    <span class="text-gray-600"
                                        >ООО «СнабЭкспорт»</span
                                    >
                                </div>
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[140px] font-semibold text-gray-700"
                                        >ИНН/КПП:</span
                                    >
                                    <span class="text-gray-600"
                                        >7814490036</span
                                    >
                                </div>
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[140px] font-semibold text-gray-700"
                                        >ОГРН:</span
                                    >
                                    <span class="text-gray-600"
                                        >1117847025075</span
                                    >
                                </div>
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[140px] font-semibold text-gray-700"
                                        >Юридический адрес:</span
                                    >
                                    <span class="text-gray-600"
                                        >197348, г. Санкт-Петербург, ул.
                                        Аэродромная, д. 6, литера А, пом. 1-Н,
                                        пом. 202</span
                                    >
                                </div>
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[140px] font-semibold text-gray-700"
                                        >Фактический адрес:</span
                                    >
                                    <span class="text-gray-600"
                                        >197348, г. Санкт-Петербург, ул.
                                        Аэродромная, д. 6, литера А, пом. 1-Н,
                                        пом. 202</span
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Банковские реквизиты -->
                        <div class="space-y-4">
                            <h3 class="text-primary mb-4 text-xl font-bold">
                                Банковские реквизиты
                            </h3>
                            <div class="space-y-3">
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[80px] font-semibold text-gray-700"
                                        >Р/сч.:</span
                                    >
                                    <span class="font-mono text-gray-600"
                                        >40702810022020000638</span
                                    >
                                </div>
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[80px] font-semibold text-gray-700"
                                        >Банк:</span
                                    >
                                    <span class="text-gray-600"
                                        >ФИЛИАЛ ПАО "БАНК УРАЛСИБ" В
                                        Г.САНКТ-ПЕТЕРБУРГ
                                        г.Санкт-Петербург</span
                                    >
                                </div>
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[80px] font-semibold text-gray-700"
                                        >БИК:</span
                                    >
                                    <span class="font-mono text-gray-600"
                                        >044030706</span
                                    >
                                </div>
                                <div class="flex flex-col gap-2 sm:flex-row">
                                    <span
                                        class="min-w-[80px] font-semibold text-gray-700"
                                        >К/сч.:</span
                                    >
                                    <span class="font-mono text-gray-600"
                                        >30101810800000000706</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "@/Layouts/Layout.vue";
</script>
