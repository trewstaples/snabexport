<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id',
        'name',
        'sort_order',
        'is_primary'
    ];

    protected $casts = [
        'is_primary' => 'boolean'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => '/storage/images/products/' . ($attributes['name'] . '.jpg' ?? '')
        );
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
