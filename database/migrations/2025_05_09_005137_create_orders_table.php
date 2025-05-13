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
        Schema::create('orders', function (Blueprint $table) {
               $table->id('order_id'); // id_orden
            $table->unsignedBigInteger('user_id')->nullable(); // id_usuario
            $table->decimal('total', 10, 2)->nullable(); // total
            $table->enum('status', ['pending', 'paid', 'cancelled'])->nullable(); // estado
            $table->dateTime('order_date')->nullable(); // fecha
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
