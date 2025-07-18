<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyDocumentCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(CompanyDocument::class, 'company_document_category_id')
            ->orderBy('sort_order');
    }

    public function activeDocuments(): HasMany
    {
        return $this->documents()->whereNull('deleted_at');
    }
}
