<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('business_id')->constrained();
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->foreignUuid('size_id')->constrained();
            $table->foreignUuid('category_id')->constrained();
            $table->foreignUuid('material_id')->constrained();
            $table->foreignUuid('style_id')->constrained();
            $table->foreignUuid('color_id')->constrained();
            $table->integer('stock_quantity')->unsigned();
            $table->string('image');
            $table->boolean('active');
            $table->timestamps();
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
