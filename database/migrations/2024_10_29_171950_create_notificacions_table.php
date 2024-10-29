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
        Schema::create('notificacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contribuyente_id');
            $table->unsignedBigInteger('peticion_id');;
            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('peticion_id')->references('id')->on('peticions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('contribuyente_id')->references('id')->on('contribuyentes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacions');
    }
};
