<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Распродажа',
                'slug' => Str::slug('Распродажа'),
                'sort_order' => 0,
                'is_sale' => true,
            ],
            [
                'name' => 'Намоточные (навивочные) станки',
                'slug' => Str::slug('Намоточные (навивочные) станки'),
                'sort_order' => 1,
            ],
            [
                'name' => 'Станки для изготовления уплотнений',
                'slug' => Str::slug('Станки для изготовления уплотнений'),
                'sort_order' => 2,
            ],
            [
                'name' => 'Материалы для изготовления уплотнений',
                'slug' => Str::slug('Материалы для изготовления уплотнений'),
                'sort_order' => 3,
            ],
            [
                'name' => 'Уплотнения (прокладки)',
                'slug' => Str::slug('Уплотнения (прокладки)'),
                'sort_order' => 4,
            ],
            [
                'name' => 'Дисковые пилы',
                'slug' => Str::slug('Дисковые пилы'),
                'sort_order' => 5,
                'children' => [
                    [
                        'name' => 'Абразивно-отрезные станки',
                        'slug' => Str::slug('Абразивно-отрезные станки'),
                        'sort_order' => 1,
                    ]
                ],
            ],
            [
                'name' => 'Гидроабразивное оборудование',
                'slug' => Str::slug('Гидроабразивное оборудование'),
                'sort_order' => 6,
            ],
            [
                'name' => 'Станки для работы с листом',
                'slug' => Str::slug('Станки для работы с листом'),
                'sort_order' => 7,
                'children' => [
                    [
                        'name' => 'Гильотины',
                        'slug' => Str::slug('Гильотины'),
                        'sort_order' => 1,
                        'children' => [
                            [
                                'name' => 'Электромеханические гильотины',
                                'slug' => Str::slug('Электромеханические гильотины'),
                                'sort_order' => 1,
                            ],
                        ],
                    ],
                ]
            ],
            [
                'name' => 'Заточные станки',
                'slug' => Str::slug('Заточные станки'),
                'sort_order' => 8,
            ],
            [
                'name' => 'Прессы',
                'slug' => Str::slug('Прессы'),
                'sort_order' => 9,
                'children' => [
                    [
                        'name' => 'Промышленные прессы',
                        'slug' => Str::slug('Промышленные прессы'),
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Гидравлические прессы',
                        'slug' => Str::slug('Гидравлические прессы'),
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Листогибочные прессы',
                        'slug' => Str::slug('Листогибочные прессы'),
                        'sort_order' => 3,
                    ],
                ],
            ],
            [
                'name' => 'Расточные станки',
                'slug' => Str::slug('Расточные станки'),
                'sort_order' => 10,
            ],
            [
                'name' => 'Сверлильные станки',
                'slug' => Str::slug('Сверлильные станки'),
                'sort_order' => 11,
                'children' => [
                    [
                        'name' => 'Вертикально-сверлильные станки',
                        'slug' => Str::slug('Вертикально-сверлильные станки'),
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Настольно-сверлильные станки',
                        'slug' => Str::slug('Настольно-сверлильные станки'),
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Радиально-сверлильные станки',
                        'slug' => Str::slug('Радиально-сверлильные станки'),
                        'sort_order' => 3,
                    ],
                ],
            ],
            [
                'name' => 'Фрезерные станки',
                'slug' => Str::slug('Фрезерные станки'),
                'sort_order' => 12,
                'children' => [
                    [
                        'name' => 'Вертикально-фрезерные станки',
                        'slug' => Str::slug('Вертикально-фрезерные станки'),
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Горизонтально-фрезерные станки',
                        'slug' => Str::slug('Горизонтально-фрезерные станки'),
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Широкоуниверсальные станки',
                        'slug' => Str::slug('Широкоуниверсальные станки'),
                        'sort_order' => 3,
                    ],
                ],
            ],
            [
                'name' => 'Шлифовальные станки',
                'slug' => Str::slug('Шлифовальные станки'),
                'sort_order' => 13,
                'children' => [
                    [
                        'name' => 'Безцентрошлифовальные станки',
                        'slug' => Str::slug('Безцентрошлифовальные станки'),
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Плоскошлифовальные станки',
                        'slug' => Str::slug('Плоскошлифовальные станки'),
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Точильно-шлифовальные станки',
                        'slug' => Str::slug('Точильно-шлифовальные станки'),
                        'sort_order' => 3,
                    ],
                ],
            ],
            [
                'name' => 'Кольцегибочные станки',
                'slug' => Str::slug('Кольцегибочные станки'),
                'sort_order' => 14,
            ],
            [
                'name' => 'Планшетные плоттеры',
                'slug' => Str::slug('Планшетные плоттеры'),
                'sort_order' => 15,
            ],
            [
                'name' => 'Токарные станки',
                'slug' => Str::slug('Токарные станки'),
                'sort_order' => 16,
                'children' => [
                    [
                        'name' => 'Токарные станки индивидуального применения',
                        'slug' => Str::slug('Токарные станки индивидуального применения'),
                        'sort_order' => 1,
                    ],
                ],
            ],
            [
                'name' => 'Станки для оребрения труб',
                'slug' => Str::slug('Станки для оребрения труб'),
                'sort_order' => 17,
            ],
        ];

        // Рекурсивная функция для создания категорий
        $this->createCategories($categories);
    }

    /**
     * Рекурсивно создает категории
     */
    private function createCategories(array $categories, ?int $parentId = null, int $level = 0): void
    {
        foreach ($categories as $categoryData) {
            $children = $categoryData['children'] ?? [];
            unset($categoryData['children']);

            // Создаем категорию
            $category = ProductCategory::create([
                'name' => $categoryData['name'],
                'slug' => $categoryData['slug'],
                'parent_id' => $parentId,
                'level' => $level,
                'sort_order' => $categoryData['sort_order'] ?? 0,
                'is_active' => true,
            ]);

            // Создаем дочерние категории
            if (!empty($children)) {
                $this->createCategories($children, $category->id, $level + 1);
            }
        }
    }
}
