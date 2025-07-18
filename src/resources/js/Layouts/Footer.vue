<template>
    <footer class="border-t border-gray-200 bg-white">
        <div class="section-container mx-auto max-w-7xl px-5 py-12">
            <!-- Основная информация -->
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- О компании -->
                <div>
                    <h3 class="text-primary mb-4 text-lg font-semibold">
                        О компании
                    </h3>
                    <div class="mb-4">
                        <p class="mb-2 text-sm text-gray-600">
                            ООО «СнабЭкспорт» (SnabExport)
                        </p>
                    </div>
                    <p class="mb-4 text-sm leading-relaxed text-gray-600">
                        Гидравлическое оборудование и инструмент для различных
                        областей промышленности и строительства, оборудование и
                        инструмент для сервиса коммерческого и легкового
                        транспорта.
                    </p>
                    <p class="text-sm text-gray-600">Продажа. Сервис. Аренда</p>
                </div>

                <!-- Оборудование -->
                <div>
                    <h3 class="text-primary mb-4 text-lg font-semibold">
                        Оборудование
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>Промышленная гидравлика</li>
                        <li>
                            Оборудование и материалы для изготовления уплотнений
                        </li>
                        <li>Металлообрабатывающее оборудование</li>
                        <li>Подшипники</li>
                        <li>
                            Промышленные пылесосы и оборудование для клининга
                        </li>
                        <li>Инструмент / Автосервис</li>
                    </ul>
                </div>

                <!-- Услуги -->
                <div>
                    <h3 class="text-primary mb-4 text-lg font-semibold">
                        Услуги
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>
                            <a
                                href="/services/arenda"
                                class="hover:text-primary transition-colors"
                            >
                                Аренда
                            </a>
                        </li>
                        <li>
                            <a
                                href="/services/servis"
                                class="hover:text-primary transition-colors"
                            >
                                Сервис
                            </a>
                        </li>
                    </ul>

                    <h3 class="text-primary mt-6 mb-4 text-lg font-semibold">
                        Новости
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>
                            <a
                                href="/news"
                                class="hover:text-primary transition-colors"
                            >
                                Все новости
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Контактная информация -->
                <div>
                    <h3 class="text-primary mb-4 text-lg font-semibold">
                        Контактная информация
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>
                            <a
                                href="tel:+78123941246"
                                class="hover:text-primary transition-colors"
                            >
                                +7 (812) 394-12-46 - офис
                            </a>
                        </li>
                        <li>
                            <a
                                href="tel:+78125063661"
                                class="hover:text-primary transition-colors"
                            >
                                +7 (812) 506-36-61 - отдел продаж
                            </a>
                        </li>
                        <li class="mt-4">
                            <a
                                href="mailto:info@snabexport.spb.ru"
                                class="hover:text-primary transition-colors"
                            >
                                info@snabexport.spb.ru
                            </a>
                        </li>
                        <li class="mt-4 text-xs text-gray-500">
                            197348, г. Санкт-Петербург,<br />
                            ул. Аэродромная, д. 6,<br />
                            литера А, пом. 1-Н, ком. 202
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Разделитель -->
            <div class="my-8 border-t border-gray-200"></div>

            <!-- Нижняя часть -->
            <div
                class="flex flex-col items-center justify-between space-y-4 md:flex-row md:space-y-0"
            >
                <div class="text-center text-sm text-gray-500 md:text-left">
                    © {{ currentYear }} СнабЭкспорт. Все права защищены.
                </div>
                <div class="flex space-x-6 text-sm text-gray-500">
                    <a
                        href="/privacy"
                        class="hover:text-primary transition-colors"
                    >
                        Политика конфиденциальности
                    </a>
                    <a
                        href="/terms"
                        class="hover:text-primary transition-colors"
                    >
                        Условия использования
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
// Получаем текущий год
const currentYear = new Date().getFullYear();
</script>
