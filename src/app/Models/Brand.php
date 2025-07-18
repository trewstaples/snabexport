<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'logo_name',
        'description',
        'brand_category_id'
    ];

    protected function logoName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => '/storage/images/brand-logos/' . ($attributes['logo_name'] . '.svg' ?? '')
        );
    }

    public function brand_category(): BelongsTo
    {
        return $this->belongsTo(BrandCategory::class);
    }
}
