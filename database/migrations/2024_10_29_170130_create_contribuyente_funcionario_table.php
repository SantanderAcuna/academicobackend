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
        Schema::create('contribuyente_funcionario', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('contribuyente_id');;
            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('contribuyente_id')->references('id')->on('contribuyentes')->onDelete('cascade');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribuyente_funcionario');
    }
};