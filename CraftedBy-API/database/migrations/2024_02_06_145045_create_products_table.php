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
            $table->string('size');
            $table->string('category');
            $table->string('material');
            $table->string('style');
            $table->string('color');
            $table->string('image');
            $table->boolean('active');
            $table->integer('stock_quantity')->unsigned();
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
