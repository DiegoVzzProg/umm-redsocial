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
            CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_buscar_usuario_x_valor_o_id_usuario`(
                IN `p_usuario` VARCHAR(20),
                IN `p_id_usuario` INT
            )
            LANGUAGE SQL
            NOT DETERMINISTIC
            CONTAINS SQL
            SQL SECURITY DEFINER
            COMMENT ""
            BEGIN
                SELECT *, CONCAT(usuario.nombre, " ", usuario.paterno, " ", usuario.materno) AS `nombre_completo`
                FROM usuario
                WHERE 
                    (p_id_usuario > 0 AND usuario.id_usuario = p_id_usuario)
                    OR 
                    (p_id_usuario = 0 AND usuario.usuario LIKE CONCAT("%", p_usuario, "%") COLLATE utf8mb4_unicode_ci);
            END        
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp_buscar_usuario_x_valor_o_id_usuario');
    }
};
