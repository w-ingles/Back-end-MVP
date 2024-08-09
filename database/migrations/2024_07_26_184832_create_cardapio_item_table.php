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
        Schema::create('cardapio_item', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('restaurante_id');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->decimal('preco');
            $table->string('patch_foto');
            $table->uuid('proprietario_id')->nullable();
            $table->uuid('tipo_id')->nullable();
            $table->timestamps();

            $table->foreign('restaurante_id')->references('id')->on('restaurantes')->onDelete('cascade');
            $table->foreign('proprietario_id')->references('id')->on('restaurantes')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipo_cardapio_item');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardapios');
    }
};
