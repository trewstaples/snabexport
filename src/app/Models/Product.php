<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $appends = ['url', 'preview_image'];

    protected $casts = [
        'specifications' => 'array',
    ];

    protected function url(): Attribute
    {
        return Attribute::make(get: fn($value, $attributes) => '/catalog/product/' . $attributes['slug']);
    }

    protected function previewImage(): Attribute
    {
        return Attribute::make(get: fn($value, $attributes) => '/storage/images/products/' . ($attributes['slug'] . '-sm'));
    }

    public function textImages(): HasMany
    {
        return $this->hasMany(ProductImage::class)
            ->where('type', ProductImage::TEXT_TYPE)
        ;
    }

    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productModels(): HasMany
    {
        return $this->hasMany(ProductModel::class);
    }
}
