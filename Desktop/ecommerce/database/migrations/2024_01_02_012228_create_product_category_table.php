<?php

use App\Models\Category;
 use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 use App\Models\Product;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_category', function (Blueprint $table) {
           $table->foreignIdFor(Product::class)->constrained()->cascadeOnDelete();
           $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
           $table->primary('product_id','category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_category');
    }
};
