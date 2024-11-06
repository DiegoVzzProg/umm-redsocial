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
            CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_obtener_usuario`(
                IN `pid_usuario` INT,
                IN `pvalor` VARCHAR(50)
            )
            LANGUAGE SQL
            NOT DETERMINISTIC
            CONTAINS SQL
            SQL SECURITY DEFINER
            COMMENT ""
            BEGIN
                SELECT * 
                FROM `usuario`
                WHERE 
                    (pvalor IS NOT NULL AND pvalor != "" AND usuario LIKE CONCAT("%", pvalor, "%"))
                    OR 
                    (pvalor IS NULL OR pvalor = "") AND id_usuario = pid_usuario;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp_obtener_usuario');
    }
};
