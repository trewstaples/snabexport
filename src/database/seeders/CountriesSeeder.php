<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::insert([
            [
                'name' => 'Россия',
                'slug' => 'russia',
            ],
            [
                'name' => 'США',
                'slug' => 'usa',
            ],
            [
                'name' => 'Германия',
                'slug' => 'germany',
            ],
            [
                'name' => 'Швеция',
                'slug' => 'sweden',
            ],
            [
                'name' => 'Китай',
                'slug' => 'china',
            ],
            [
                'name' => 'Япония',
                'slug' => 'japan',
            ],
            [
                'name' => 'Италия',
                'slug' => 'italy',
            ],
            [
                'name' => 'Франция',
                'slug' => 'france',
            ],
            [
                'name' => 'Испания',
                'slug' => 'spain',
            ],
            [
                'name' => 'Тайвань',
                'slug' => 'taiwan',
            ],
        ]);
    }
}
