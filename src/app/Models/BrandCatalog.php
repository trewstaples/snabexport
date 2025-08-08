<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class BrandCatalog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand_id',
        'name',
        'file_name',
        'sort_order',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    protected function fileName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => '/storage/documents/brand-catalogs/' . (($attributes['file_name'] ?? '') . '.pdf')
        );
    }
}
