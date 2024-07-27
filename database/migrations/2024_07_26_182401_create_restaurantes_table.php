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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->string('endereco');
            $table->string('telefone');
            $table->string('horario_funcionamento')->nullable();
            $table->string('website')->nullable();
            $table->float('avaliacao')->default(0);
            $table->uuid('proprietario_id')->nullable();
            $table->timestamps();

            $table->foreign('proprietario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
