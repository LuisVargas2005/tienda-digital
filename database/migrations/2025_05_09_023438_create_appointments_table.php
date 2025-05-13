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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id'); // id_cita
            $table->unsignedBigInteger('client_id')->nullable(); // id_cliente
            $table->unsignedBigInteger('technician_id')->nullable(); // id_tecnico
            $table->dateTime('scheduled_at')->nullable(); // fecha_hora
            $table->string('service_type', 100)->nullable(); // tipo_servicio
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed'])->nullable(); // estado
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('users')->nullOnDelete();
            $table->foreign('technician_id')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
