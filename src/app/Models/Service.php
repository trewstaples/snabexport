<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected function imageName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => '/storage/images/services/' . ($attributes['image_name'] . '.svg' ?? '')
        );
    }
}
