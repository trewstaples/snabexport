<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use App\Models\ProductCategory;

class CatalogController extends Controller
{
    /**
     * Получить категории и отфильтрованные продукты
     */
    public function index(string $path = null)
    {
        // Получаем все категории в виде дерева
        $categories = ProductCategory::getFullTree();

        // Если путь не указан, показываем все продукты
        if ($path === ProductCategory::SALE_PATH) {
            $products = Product::where('is_sale', true)
                ->get();

            return Inertia::render('CatalogPage', [
                'categories' => $categories,
                'products' => $products,
                'currentCategory' => null
            ]);
        }

        // Разбиваем путь на сегменты для поиска конечной категории
        $segments = explode('/', $path);
        $currentCategory = null;

        // Ищем категорию по последнему сегменту (slug)
        $lastSlug = end($segments);
        $currentCategory = ProductCategory::where('slug', $lastSlug)->first();

        if (!$currentCategory) {
            abort(404);
        }

        // Получаем все ID подкатегорий текущей категории
        $categoryIds = [$currentCategory->id];
        $this->getChildCategoryIds($currentCategory, $categoryIds);

        // Получаем продукты для текущей категории и всех её подкатегорий
        $products = Product::whereIn('product_category_id', $categoryIds)
            ->orderBy('sort_order')
            ->get();

        return Inertia::render('CatalogPage', [
            'categories' => $categories,
            'products' => $products,
            'currentCategory' => $currentCategory
        ]);
    }

    /**
     * Показать детальную страницу продукта
     */
    public function show(Product $product)
    {
        // Загружаем продукт с изображениями, категорией и моделями
        $product->load(['textImages', 'productCategory', 'productModels' => function ($query) {
            $query->where('is_active', true)->orderBy('sort_order');
        }]);

        return Inertia::render('ProductDetailPage', [
            'product' => $product
        ]);
    }

    /**
     * Рекурсивно собирает ID всех подкатегорий
     */
    private function getChildCategoryIds(ProductCategory $category, array &$ids)
    {
        foreach ($category->children as $child) {
            $ids[] = $child->id;
            $this->getChildCategoryIds($child, $ids);
        }
    }
}
