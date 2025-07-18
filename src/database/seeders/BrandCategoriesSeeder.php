<?php

namespace Database\Seeders;

use App\Models\BrandCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BrandCategory::insert([
            [
                'name' => 'Промышленная гидравлика',
                'slug' => 'industrial-hydraulics',
                'image_name' => 'industrial-hydraulics',
            ],
            [
                'name' => 'Металло-обрабатывающее оборудование',
                'slug' => 'metalworking-equipment',
                'image_name' => 'metalworking-equipment',
            ],
            [
                'name' => 'Подшипники',
                'slug' => 'bearings',
                'image_name' => 'bearings',
            ],
            [
                'name' => 'Промышленные пылесосы и оборудование для клининга',
                'slug' => 'vacuum-cleaners-and-cleaning-equipment',
                'image_name' => 'vacuum-cleaners-and-cleaning-equipment',
            ],
            [
                'name' => 'Инструмент / Автосервис',
                'slug' => 'tools-and-car-service',
                'image_name' => 'tools-and-car-service',
            ],
        ]);
    }
}
