<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\CompanyDocumentCategory;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BrandContrtoller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CatalogController;

Route::get('/', MainController::class);


Route::get('brands', [BrandContrtoller::class, 'index']);
Route::get('brands/{brand:slug}', [BrandContrtoller::class, 'show']);
Route::get('brands-categories/{brandCategory:slug}', [BrandContrtoller::class, 'showBrandCategory']);

Route::get('catalog/product/{product:slug}', [CatalogController::class, 'show']);
Route::get('catalog/{path?}', [CatalogController::class, 'index'])
    ->where('path', '.*');


Route::get('rental', [ServiceController::class, 'rental']);
Route::get('service', [ServiceController::class, 'service']);
Route::get('repair', [ServiceController::class, 'repair']);

Route::get('news', [NewsController::class, 'index']);
Route::get('news/{news:slug}', [NewsController::class, 'show']);
Route::get('about', function () {
    $companyDocuments = CompanyDocumentCategory::with('documents')->get();
    return Inertia::render('AboutCompanyPage', [
        'companyDocuments' => $companyDocuments
    ]);
});

Route::get('contacts', function () {
    return Inertia::render('ContactsPage');
});
