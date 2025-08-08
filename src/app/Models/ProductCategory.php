<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'level',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected $appends = ['url'];

    const SALE_PATH = 'rasprodaza';

    /**
     * Получить URL категории
     */
    protected function url(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                // Базовый URL для категорий
                $baseUrl = '/catalog';

                // Если это подкатегория, добавляем родительские slug
                if ($this->parent_id) {
                    $parentSlugs = $this->getParentSlugs();
                    return $baseUrl . '/' . $parentSlugs . '/' . $attributes['slug'];
                }

                return $baseUrl . '/' . $attributes['slug'];
            }
        );
    }

    /**
     * Получить строку из slug родительских категорий
     */
    protected function getParentSlugs(): string
    {
        $slugs = [];
        $parent = $this->parent;

        while ($parent) {
            array_unshift($slugs, $parent->slug);
            $parent = $parent->parent;
        }

        return implode('/', $slugs);
    }


    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Скоуп для активных категорий
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Скоуп для корневых категорий
     */
    public function scopeRoots($query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * Отношение к родительской категории
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * Отношение к дочерним категориям
     */
    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')
            ->where('is_active', true)
            ->orderBy('sort_order');
    }

    /**
     * Отношение ко всем дочерним категориям (рекурсивно)
     */
    public function allChildren(): HasMany
    {
        return $this->children()->with('allChildren');
    }

    /**
     * Получить корневые категории с их детьми (использует B-tree индексы)
     */
    public static function getRootCategories(): Collection
    {
        return self::roots()
            ->active()
            ->orderBy('sort_order')
            ->get();
    }

    /**
     * Получить полное дерево категорий (рекомендуемый метод)
     */
    public static function getFullTree()
    {
        // Простой и эффективный запрос с использованием B-tree индексов
        return self::whereNull('parent_id')  // Использует индекс ['parent_id', 'is_active', 'sort_order']
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->with(['allChildren' => function ($query) {
                $query->orderBy('sort_order');  // Сортировка детей
            }])
            ->get();
    }
}
