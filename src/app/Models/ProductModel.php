<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductModel extends Model
{
    protected $casts = [
        'specifications' => 'array',
        'is_active' => 'boolean',
    ];

    protected $fillable = [
        'product_id',
        'model_name',
        'price',
        'specifications',
        'is_active',
        'sort_order',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
