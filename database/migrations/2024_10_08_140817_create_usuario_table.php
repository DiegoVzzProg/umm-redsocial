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
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');   // id_usuario INT Auto Increment
            $table->string('nombre', 255);      // nombre VARCHAR(255)
            $table->string('paterno', 255);     // paterno VARCHAR(255)
            $table->string('materno', 255);     // materno VARCHAR(255)
            $table->string('usuario', 20);      // usuario VARCHAR(20)
            $table->text('contraseña');         // contraseña TEXT
            $table->string('email', 254);       // email VARCHAR(254)
            $table->text('telefono');           // telefono TEXT
            $table->date('fecha_nacimiento');   // fecha_nacimiento DATE
            $table->timestamp('fecha_registro')->useCurrent(); // fecha_registro TIMESTAMP con valor predeterminado actual
            $table->char('sexo', 1);            // sexo CHAR(1)
            $table->string('biografia', 200);   // biografia VARCHAR(200)
            $table->string('rol', 50);          // rol VARCHAR(50)
            $table->integer('seguidores');      // seguidores INT
            $table->integer('sigue_a');         // sigue_a INT
            $table->text('token_verificacion'); // token_verificacion TEXT
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
