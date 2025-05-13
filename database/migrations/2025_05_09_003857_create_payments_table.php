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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id'); // id_pago
            $table->unsignedBigInteger('user_id')->nullable(); // id_usuario
            $table->enum('method', ['Nequi', 'Bancolombia'])->nullable(); // metodo
            $table->decimal('amount', 10, 2)->nullable(); // monto
            $table->enum('status', ['successful', 'failed', 'pending'])->nullable(); // estado
            $table->dateTime('payment_date')->nullable(); // fecha_pago
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
