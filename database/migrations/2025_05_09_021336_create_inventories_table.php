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
        Schema::create('inventories', function (Blueprint $table) {
             $table->id('inventory_id'); // id_inventario
            $table->unsignedBigInteger('product_id'); // id_producto
            $table->integer('current_quantity')->nullable(); // cantidad_actual
            $table->dateTime('last_updated')->nullable(); // ultima_actualizacion
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
