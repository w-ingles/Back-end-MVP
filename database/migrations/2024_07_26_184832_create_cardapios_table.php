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
        Schema::create('cardapios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('restaurante_id');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->decimal('preco');
            $table->timestamps();

            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
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
