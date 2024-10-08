<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE PROCEDURE `sp_obtener_info_usuario_estadisticas`(
                IN `pid_usuario` INT
            )
            LANGUAGE SQL
            NOT DETERMINISTIC
            CONTAINS SQL
            SQL SECURITY DEFINER
            COMMENT ""
            BEGIN
                SELECT usuario.publicaciones, usuario.sigue_a, usuario.seguidores 
                FROM usuario 
                WHERE usuario.id_usuario = pid_usuario;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS `sp_obtener_info_usuario_estadisticas`');
    }
};
