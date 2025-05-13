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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('notification_id'); // id_notificacion
            $table->unsignedBigInteger('user_id')->nullable(); // id_usuario
            $table->enum('type', ['reminder', 'low_stock'])->nullable(); // tipo
            $table->text('message')->nullable(); // mensaje
            $table->enum('channel', ['email', 'sms'])->nullable(); // canal
            $table->boolean('sent')->nullable(); // enviada
            $table->dateTime('sent_at')->nullable(); // fecha_envio
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
