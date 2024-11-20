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
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_obtener_estadisticas_usuario`(
	IN `p_id_usuario` INT
)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ""
BEGIN

	DECLARE v_sigues INT DEFAULT 0;
	DECLARE v_seguidores INT DEFAULT 0;
	DECLARE v_publicaciones INT DEFAULT 0;
	
	SELECT 
	    COUNT(DISTINCT CASE WHEN s.id_seguidor = p_id_usuario THEN s.id_seguido END),
	    COUNT(DISTINCT CASE WHEN s.id_seguido = p_id_usuario THEN s.id_seguidor END)
	INTO 
    	v_sigues, v_seguidores
	FROM 
	    seguidores s
	WHERE 
	    s.borrado = 0
	    AND (s.id_seguidor = p_id_usuario OR s.id_seguido = p_id_usuario);
	
	SELECT COUNT(pub.id_usuario) INTO v_publicaciones
	FROM publicaciones pub 
	WHERE pub.id_usuario = p_id_usuario AND pub.borrado = 0;
	
	SELECT v_sigues AS sigues, v_seguidores AS seguidores, v_publicaciones AS publicaciones;
END  
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp_obtener_estadisticas_usuario');
    }
};
