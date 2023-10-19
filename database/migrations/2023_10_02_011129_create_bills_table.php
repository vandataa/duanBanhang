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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('billcode');
            $table->bigInteger('id_user')->unsigned();
            $table->string('address');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('cart_bill');
            $table->string('product');
            $table->string('total');
            $table->string('paymain');
            $table->datetimes('date');
            $table->bigInteger('status')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
