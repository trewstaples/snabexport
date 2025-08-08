<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\BrandCatalog;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BrandCatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = Brand::all();
        BrandCatalog::insert([
            [
                'brand_id' => $brands->where('slug', 'enerpac')->first()->id,
                'name' => 'Enerpac Промышленные инструменты',
                'file_name' => Str::slug('Enerpac Промышленные инструменты'),
            ],
            [
                'brand_id' => $brands->where('slug', 'bosch-rexroth')->first()->id,
                'name' => 'Bosch Rexroth. Промышленная гидравлика. Гидравлические и электронные компоненты',
                'file_name' => Str::slug('Bosch Rexroth. Промышленная гидравлика. Гидравлические и электронные компоненты'),
            ],
            [
                'brand_id' => $brands->where('slug', 'snab')->first()->id,
                'name' => 'Промышленная гидравлика Snab',
                'file_name' => Str::slug('Промышленная гидравлика Snab'),
            ],
            [
                'brand_id' => $brands->where('slug', 'stalex')->first()->id,
                'name' => 'Stalex. Станки для обработки металла',
                'file_name' => Str::slug('Stalex. Станки для обработки металла'),
            ],
            [
                'brand_id' => $brands->where('slug', 'achteck')->first()->id,
                'name' => 'Achetek. Общий каталог',
                'file_name' => Str::slug('Achetek. Общий каталог'),
            ],
            [
                'brand_id' => $brands->where('slug', 'achteck')->first()->id,
                'name' => 'Achetek. Расточные системы',
                'file_name' => Str::slug('Achetek. Расточные системы'),
            ],
            [
                'brand_id' => $brands->where('slug', 'achteck')->first()->id,
                'name' => 'Achetek. Глубокое сверление',
                'file_name' => Str::slug('Achetek. Глубокое сверление'),
            ],
            [
                'brand_id' => $brands->where('slug', 'achteck')->first()->id,
                'name' => 'Achetek. D108 Series',
                'file_name' => Str::slug('Achetek. D108 Series'),
            ],
            [
                'brand_id' => $brands->where('slug', 'achteck')->first()->id,
                'name' => 'Achetek. D108 Series',
                'file_name' => Str::slug('Achetek. D108 Series'),
            ],
            [
                'brand_id' => $brands->where('slug', 'sant')->first()->id,
                'name' => 'Sant. Токарный и фрезерный инструмент',
                'file_name' => Str::slug('Sant. Токарный и фрезерный инструмент'),
            ],
            [
                'brand_id' => $brands->where('slug', 'sant')->first()->id,
                'name' => 'Sant. Сменные пластины',
                'file_name' => Str::slug('Sant. Сменные пластины'),
            ],
            [
                'brand_id' => $brands->where('slug', 'satools')->first()->id,
                'name' => 'Satools. Пластины твердосплавные',
                'file_name' => Str::slug('Satools. Пластины твердосплавные'),
            ],
            [
                'brand_id' => $brands->where('slug', 'satools')->first()->id,
                'name' => 'Satools. Метчики и свёрла',
                'file_name' => Str::slug('Satools. Метчики и свёрла'),
            ],
            [
                'brand_id' => $brands->where('slug', 'efco')->first()->id,
                'name' => 'EFCO. Техника обрабтки и испытаний арматуры',
                'file_name' => Str::slug('EFCO. Техника обрабтки и испытаний арматуры'),
            ],
            [
                'brand_id' => $brands->where('slug', 'skf')->first()->id,
                'name' => 'Skf. Общий каталог',
                'file_name' => Str::slug('Skf. Общий каталог'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Однорядные радиальные шарикоподшипники FAG поколения С',
                'file_name' => Str::slug('INA FAG. Однорядные радиальные шарикоподшипники FAG поколения С'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Разъемные сферические роликоподшипники ',
                'file_name' => Str::slug('INA FAG. Разъемные сферические роликоподшипники '),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Специальные сферические роликоподшипники FAG для вибрационных машин ',
                'file_name' => Str::slug('INA FAG. Специальные сферические роликоподшипники FAG для вибрационных машин '),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Сферические роликоподшипники FAG cо встроенными уплотнениями ',
                'file_name' => Str::slug('INA FAG. Сферические роликоподшипники FAG cо встроенными уплотнениями '),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Токоизолирующие подшипники качения FAG',
                'file_name' => Str::slug('INA FAG. Токоизолирующие подшипники качения FAG'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Double Row Angular Contact Ball Bearings',
                'file_name' => Str::slug('INA FAG. Double Row Angular Contact Ball Bearings'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. E1 – THE NEW STANDARD FOR SPHERICAL ROLLER BEARINGS',
                'file_name' => Str::slug('INA FAG. E1 – THE NEW STANDARD FOR SPHERICAL ROLLER BEARINGS'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Single row FAG X-life angular contact ball bearings',
                'file_name' => Str::slug('INA FAG. Single row FAG X-life angular contact ball bearings'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. INA Product Reference Guide',
                'file_name' => Str::slug('INA FAG. INA Product Reference Guide'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Cylindrical Roller Bearings',
                'file_name' => Str::slug('INA FAG. Cylindrical Roller Bearings'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Needle Bearings',
                'file_name' => Str::slug('INA FAG. Needle Bearings'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Radial Ball Bearings',
                'file_name' => Str::slug('INA FAG. Radial Ball Bearings'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Roller Clutches',
                'file_name' => Str::slug('INA FAG. Roller Clutches'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Thrust Bearings',
                'file_name' => Str::slug('INA FAG. Thrust Bearings'),
            ],
            [
                'brand_id' => $brands->where('slug', 'ina-fag')->first()->id,
                'name' => 'INA/FAG. Cam Followers',
                'file_name' => Str::slug('INA FAG. Cam Followers'),
            ],
            [
                'brand_id' => $brands->where('slug', 'koyo')->first()->id,
                'name' => 'Koyo. Общий каталог подшипников качения',
                'file_name' => Str::slug('Koyo. Общий каталог подшипников качения'),
            ],
            [
                'brand_id' => $brands->where('slug', 'koyo')->first()->id,
                'name' => 'Koyo. Корпусные подшипниковые узлы',
                'file_name' => Str::slug('Koyo. Корпусные подшипниковые узлы'),
            ],
            [
                'brand_id' => $brands->where('slug', 'snr')->first()->id,
                'name' => 'SNR. TOPLINE Уникальный ассортимент подшипников для экстремальных условий использования',
                'file_name' => Str::slug('SNR. TOPLINE Уникальный ассортимент подшипников для экстремальных условий использования'),
            ],
            [
                'brand_id' => $brands->where('slug', 'snr')->first()->id,
                'name' => 'SNR. SNR thermoplactic self-aligning bearing units',
                'file_name' => Str::slug('SNR. SNR thermoplactic self-aligning bearing units'),
            ],
            [
                'brand_id' => $brands->where('slug', 'snr')->first()->id,
                'name' => 'SNR. SNR Stainliss Steel Ball Bearing Units',
                'file_name' => Str::slug('SNR. SNR Stainliss Steel Ball Bearing Units'),
            ],
            [
                'brand_id' => $brands->where('slug', 'maxima')->first()->id,
                'name' => 'Maxim. Общий каталог',
                'file_name' => Str::slug('Maxim. Общий каталог подшипников качения'),
            ],
            [
                'brand_id' => $brands->where('slug', 'maxima')->first()->id,
                'name' => 'Maxima. Общий каталог',
                'file_name' => Str::slug('Maxima. Общий каталог подшипников качения'),
            ],
            [
                'brand_id' => $brands->where('slug', 'jtc-auto-tools')->first()->id,
                'name' => 'JTC Auto Tool. Общий каталог',
                'file_name' => Str::slug('JTC Auto Tool. Общий каталог подшипников качения'),
            ],
        ]);
    }
}
