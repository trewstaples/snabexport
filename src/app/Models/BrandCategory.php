<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BrandCategory extends Model
{
    use SoftDeletes;

    const INDUSTRIAL_HYDRAULICS_ID = 1;
    const METALWORKING_EQUIPMENT_ID = 2;
    const BEARINGS_ID = 3;
    const INDUSTRIAL_VACUUM_CLEANERS_AND_CLEANING_EQUIPMENT_ID = 4;
    const TOOL_AND_CAR_SERVICE_ID = 5;

    public function brands(): HasMany
    {
        return $this->hasMany(Brand::class);
    }

    protected function imageName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => '/storage/images/product-categories/' . ($attributes['image_name'] ?? '')
        );
    }
}
