<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class News extends Model
{
    /** @use HasFactory<\Database\Factories\NewsFactory> */

    protected $fillable = [
        'title',
        'slug',
        'preview_image_name',
        'text'
    ];


    protected function previewImageName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => '/storage/images/news/' . ($attributes['preview_image_name'] ?? '')
        );
    }
}
