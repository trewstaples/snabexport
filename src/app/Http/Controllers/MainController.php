<?php

namespace App\Http\Controllers;

use App\Models\News;
use Inertia\Inertia;
use App\Models\Brand;
use App\Models\Service;
use App\Models\BrandCategory;

class MainController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('MainPage', [
            'brandCategories' => BrandCategory::all(),
            'services' => Service::all(),
            'brands' => Brand::all(),
            'newsList' => News::orderBy('created_at', 'DESC')->get(),
        ]);
    }
}
