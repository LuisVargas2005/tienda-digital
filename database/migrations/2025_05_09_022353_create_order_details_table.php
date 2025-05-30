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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('detail_id'); // id_detalle
            $table->unsignedBigInteger('order_id')->nullable(); // id_orden
            $table->unsignedBigInteger('product_id')->nullable(); // id_producto
            $table->integer('quantity')->nullable(); // cantidad
            $table->decimal('unit_price', 10, 2)->nullable(); // precio_unitario
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('orders')->nullOnDelete();
            $table->foreign('product_id')->references('id')->on('products')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
