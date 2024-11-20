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
        Schema::create('seguidores', function (Blueprint $table) {
            $table->increments('id_seguidores'); // ID autoincremental para cada relación
            $table->unsignedInteger('id_seguidor'); // ID del usuario que sigue (referencia a id_usuario)
            $table->unsignedInteger('id_seguido'); // ID del usuario que es seguido (referencia a id_usuario)
            $table->timestamp('fecha')->useCurrent(); // Fecha en la que empezó a seguir
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguidores');
    }
};
