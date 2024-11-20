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
            CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_autenticacion_usuario`(
                IN `p_email` VARCHAR(254),
                IN `p_contraseña` TEXT
            )
            LANGUAGE SQL
            NOT DETERMINISTIC
            CONTAINS SQL
            SQL SECURITY DEFINER
            COMMENT ""
            BEGIN
                SELECT * 
                FROM usuario 
                WHERE 
                    usuario.email COLLATE utf8mb4_unicode_ci = p_email COLLATE utf8mb4_unicode_ci
                    AND
                    usuario.contraseña COLLATE UTF8MB4_UNICODE_CI = p_contraseña COLLATE utf8mb4_unicode_ci;
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
