<?php

namespace Database\Seeders;

use App\Models\CompanyDocument;
use Illuminate\Database\Seeder;
use App\Models\CompanyDocumentCategory;

class CompanyDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyDocumentCategory::insert([
            [
                'name' => 'Сертификаты',
                'slug' => 'certificates',
                'sort_order' => 1,
            ],
            [
                'name' => 'Свидетельства',
                'slug' => 'testimonials',
                'sort_order' => 2,
            ],
            [
                'name' => 'Благодарности',
                'slug' => 'gratitudes',
                'sort_order' => 3,
            ],
        ]);

        $categories = CompanyDocumentCategory::all();

        $certificates = $categories->where('slug', 'certificates')->first();
        $testimonials = $categories->where('slug', 'testimonials')->first();
        $gratitudes = $categories->where('slug', 'gratitudes')->first();

        CompanyDocument::insert([
            [
                'company_document_category_id' => $certificates->id,
                'name' => 'Сертификат дилера Stalex',
                'image_name' => 'stalex',
                'file_name' => 'stalex',
                'sort_order' => 1,
            ],
            [
                'company_document_category_id' => $certificates->id,
                'name' => 'Сертификат дилера JTC Auto Tools',
                'image_name' => 'jtc-auto-tools',
                'file_name' => 'jtc-auto-tools',
                'sort_order' => 2,
            ],
            [
                'company_document_category_id' => $certificates->id,
                'name' => 'Сертификат дилера T-Company',
                'image_name' => 't-company',
                'file_name' => 't-company',
                'sort_order' => 3,
            ],
            [
                'company_document_category_id' => $testimonials->id,
                'name' => 'Свидительство «Барнаульского завода АТИ»',
                'image_name' => 'barnaul',
                'file_name' => 'barnaul',
                'sort_order' => 4,
            ],
            [
                'company_document_category_id' => $gratitudes->id,
                'name' => 'Благодарственное письмо «Уралхим»',
                'image_name' => 'uralhim',
                'file_name' => 'uralhim',
                'sort_order' => 5,
            ],
        ]);
    }
}
