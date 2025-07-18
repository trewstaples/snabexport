<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\BrandCategory;

class BrandContrtoller extends Controller
{
    public function index()
    {
        return Inertia::render('BrandsListPage', [
            'brandCategories' => BrandCategory::with(['brands' => function ($q) {
                $q->orderBy('id');
            }])->get(),
        ]);
    }

    public function show(Brand $brand)
    {
        return Inertia::render('BrandDetailPage', [
            'brand' => $brand
        ]);
    }

    public function showBrandCategory(BrandCategory $brandCategory)
    {
        return Inertia::render('BrandsListPage', [
            'brandCategories' => collect([$brandCategory->load(['brands' => function ($q) {
                $q->orderBy('id');
            }])]),
        ]);
    }
}
