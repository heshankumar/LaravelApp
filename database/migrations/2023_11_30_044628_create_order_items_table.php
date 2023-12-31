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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->decimal('total_cost', 8, 2);
            $table->timestamps();

        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
<<<<<<< HEAD
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
=======
        $table->foreign('[product_id')->references('id')->on('products')->onDelete('cascade');
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
