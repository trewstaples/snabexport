<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BrandCategoriesSeeder::class,
            BrandsSeeder::class,
            ServicesSeeder::class,
            NewsSeeder::class,
            CompanyDocumentsSeeder::class,
            ProductCategoriesSeeder::class,
            CountriesSeeder::class,
            ProductsSeeder::class,
            ProductModelSeeder::class,
        ]);
    }
}
