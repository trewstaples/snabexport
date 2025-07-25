<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::insert([
            [
                'title' => '«СнабЭкспорт» стала официальным дилером «Барнаульского завода АТИ»',
                'slug' => Str::slug('«СнабЭкспорт» стала официальным дилером «Барнаульского завода АТИ»'),
                'preview_image_name' => Str::slug('«СнабЭкспорт» стала официальным дилером «Барнаульского завода АТИ»'),
                'text' => 'С 1 января 2024 года компания «СнабЭкспорт» стала официальным дилером «Барнаульского завода АТИ». Специализацией производства являются высококачественные листовые прокладочные материалы, уплотнительные материалы и изделия, теплоизоляционные материалы и текстиль, а также тормозные и фрикционные изделия. Контроль качества на всех этапах производства производится заводской лабораторией, аттестованной по всем стандартам. Продукция Барнаульского завода АТИ проходит сертификацию на соответствие требованиям нормативных документов, как обязательную, так и добровольную',
                'created_at' => '2024-01-05',
            ],
            [
                'title' => '«Снабэкспорт принял участие в выставке «НЕФТЕГАЗ-2024» в Москве',
                'slug' => Str::slug('«СнабЭкспорт» принял участие в выставке «НЕФТЕГАЗ-2024» в Москве'),
                'preview_image_name' => Str::slug('«СнабЭкспорт» принял участие в выставке «НЕФТЕГАЗ-2024» в Москве'),
                'text' => 'С 15 по 18 апреля компания «Снабэкспорт» принимала участие в международной выставке «НЕФТЕГАЗ-2024» в Москве. Нами было представлено различное промышленное гидравлическое оборудование и инструменты, подшипники, станки для изготовления спирально-навитых прокладок и многое другое. Наша команда регулярно участвует в выставочных мероприятиях в целях расширения круга партнеров.',
                'created_at' => '2024-04-19',
            ],
            [
                'title' => 'Благодарственное письмо от Уралхим',
                'slug' => Str::slug('Благодарственное письмо от Уралхим'),
                'preview_image_name' => Str::slug('Благодарственное письмо от Уралхим'),
                'text' => 'Филиала «ПМУ» АО «ОХК «УРАЛХИМ» в городе Перми выразил компании «СнабЭкспорт» искреннюю благодарность за качественную и своевременную поставку навивочного станка вертикального типа с ЧПУ модели WW500SC-A CNC.',
                'created_at' => '2024-08-13',
            ],
            [
                'title' => '«СнабЭкспорт» принял участие в выставке «НЕФТЕГАЗ-2025» в Москве',
                'slug' => Str::slug('«СнабЭкспорт» принял участие в выставке «НЕФТЕГАЗ-2025» в Москве'),
                'preview_image_name' => Str::slug('«СнабЭкспорт» принял участие в выставке «НЕФТЕГАЗ-2025» в Москве'),
                'text' => 'С 14 по 17 апреля в ЦВК «Экспоцентр» (г.Москва) прошла 24-я международная выставка оборудования и технологий для нефтегазового комплекса «Нефтегаз-2025». Нашей компанией вместе с партнерами на совместном стенде было представлено спирально-навитые прокладки (СНП) и станки для их производства.',
                'created_at' => '2025-04-29',
            ],
        ]);
    }
}
