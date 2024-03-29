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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->integer('tiempo')->default(0);
            $table->enum('dificultad',['facil','media','compleja']);
            $table->text('texto')->default("Lorem Ipsum");
            $table->enum('tipo',['tradicional','slow food','freidora sin aceite']);
            $table->string('imagen')->nullable();
            $table->foreignId('id_usuario')->constrained('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
