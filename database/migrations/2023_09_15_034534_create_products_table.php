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
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('thunm');
            $table->text('galery');
            $table->string('productCode');
            $table->string('inventory');
            $table->string('regularPrice');
            $table->string('SKU');
            $table->string('discount')->nullable();
            $table->string('video');
            $table->bigInteger('categories')->unsigned();
            $table->foreign('categories')->references('id')->on('categories');
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
