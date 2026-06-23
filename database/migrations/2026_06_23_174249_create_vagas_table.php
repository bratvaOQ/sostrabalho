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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->string('empresa', 120)->nullable();
            $table->longText('descricao_completa');
            $table->string('requisisto', 600)->nullable();;
            $table->string('beneficio', 1000)->nullable();;
            $table->decimal('salário', 8, 2)->nullable();;
            $table->foreignId('categorias_id');
            $table->foreignId('empresas_id');
            $table->string('localidade', 200);
            $table->string('descricao_resumida', 260)->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
