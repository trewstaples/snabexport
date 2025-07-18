<?php

use Illuminate\Support\Facades\Schema;
use App\Models\CompanyDocumentCategory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CompanyDocumentCategory::class);
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image_name');
            $table->string('file_name');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_documents');
    }
};
