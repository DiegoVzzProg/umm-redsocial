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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id_publicacion');  // ID de la publicación
            $table->integer('id_usuario');  // Usuario que hizo la publicación
            $table->text('contenido');  // Texto de la publicación
            $table->string('imagen')->nullable();  // Ruta de la imagen (opcional)
            $table->integer('likes')->default(0);  // Número de likes
            $table->timestamps();  // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicaciones');
    }
};
