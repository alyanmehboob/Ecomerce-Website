<?php

use App\Models\Admin\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id', 5);
            $table->string('product_name')->nullable();
            $table->integer('price')->nullable();
            $table->string('slug_url')->nullable();
            $table->string('category_name')->nullable();
            $table->integer('stock_quantity')->nullable();
            $table->string('product_image')->nullable();
            $table->string('description')->nullable();
            $table->foreign('emp_id')->references('emp_id')->on('category');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
