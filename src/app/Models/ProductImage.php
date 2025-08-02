<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    use SoftDeletes;

    const PREVIEW_TYPE = 'preview';
    const TEXT_TYPE = 'text';

    protected $fillable = [
        'product_id',
        'name',
        'sort_order',
        'type'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(get: fn($value, $attributes) => '/storage/images/products/' . ($attributes['name']));
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
