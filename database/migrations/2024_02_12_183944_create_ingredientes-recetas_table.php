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
        Schema::create('ingredientes-recetas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_receta')->constrained('recetas');
            $table->foreignId('id_ingrediente')->constrained('ingredientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredientes-recetas');
    }
};
