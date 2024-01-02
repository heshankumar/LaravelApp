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
            $table->string('product_name');
            $table->string('manufacturer');
            $table->integer('qty');
            $table->integer('unit_price');
            $table->unsignedBigInteger('supllier_id');
            $table->foreign('supllier_id')->references('id')->on('suppliers')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type');
            $table->text('description');
            $table->string('image')->nullable();
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
