<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class CompanyDocument extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_document_category_id',
        'name',
        'description',
        'image_name',
        'file_name',
        'sort_order'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CompanyDocumentCategory::class);
    }

    protected function imageName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => '/storage/images/company-documents/' . ($attributes['image_name'] . '.jpg' ?? '')
        );
    }

    protected function fileName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => '/storage/documents/company-documents/' . ($attributes['file_name'] . '.pdf' ?? '')
        );
    }
}
