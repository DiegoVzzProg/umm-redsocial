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
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_sugerencias_amistad`(
	IN `p_id_usuario` INT
)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ""
BEGIN
	SELECT 
	  	usuario.id_usuario
	, 	usuario.foto_perfil
	,	usuario.usuario
	FROM usuario
	LEFT JOIN seguidores 
	  ON seguidores.id_seguidor = p_id_usuario 
	  AND seguidores.id_seguido = usuario.id_usuario
	  AND seguidores.borrado = 0
	WHERE 
	  usuario.id_usuario <> p_id_usuario
	  AND usuario.activo = 1
	  AND seguidores.id_seguidor IS NULL
	ORDER BY RAND()
	LIMIT 10;
END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp_get_sugerencias_amistad');
    }
};
