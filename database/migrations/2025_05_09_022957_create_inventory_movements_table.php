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
        Schema::create('inventory_movements', function (Blueprint $table) {
            $table->id('movement_id'); // id_movimiento
            $table->unsignedBigInteger('product_id'); // id_producto
            $table->enum('type', ['entry', 'exit'])->nullable(); // tipo (entrada/salida)
            $table->integer('quantity')->nullable(); // cantidad
            $table->string('reason', 100)->nullable(); // motivo
            $table->dateTime('date')->nullable(); // fecha
            $table->unsignedBigInteger('performed_by')->nullable(); // realizado_por
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
            $table->foreign('performed_by')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_movements');
    }
};
