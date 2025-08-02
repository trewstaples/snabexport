<?php

use App\Models\ProductCategory;
use App\Models\Country;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignIdFor(ProductCategory::class);
            $table->foreignIdFor(Country::class);
            $table->string('price')->nullable();
            $table->string('sale_price')->nullable();
            $table->text('description');
            $table->jsonb('specifications')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_sale')->default(false);
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
