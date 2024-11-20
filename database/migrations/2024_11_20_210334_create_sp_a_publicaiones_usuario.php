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
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_a_publicaiones_usuario`(
	IN `p_id_usuario` INT,
	IN `p_contenido` TEXT,
	IN `p_imagen` TEXT
)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ""
BEGIN
    DECLARE mensaje VARCHAR(250) DEFAULT "";
    DECLARE abortado BIT DEFAULT 0;
	
	INSERT INTO publicaciones (
	  	id_usuario
	,	contenido
	,	imagen
	,	created_at
	,	updated_at
	,	borrado
	)
	VALUES (
		p_id_usuario
	,	p_contenido
	,	p_imagen
	,	CURRENT_TIMESTAMP
	,	CURRENT_TIMESTAMP
	,	0
	);
	
	SELECT mensaje AS MENSAJE, abortado AS ABORTADO;
END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp_a_publicaiones_usuario');
    }
};
