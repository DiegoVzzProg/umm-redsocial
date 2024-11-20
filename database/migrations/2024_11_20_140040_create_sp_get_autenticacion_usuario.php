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
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_publicaciones_usuarios`(
	IN `p_id_usuario` INT,
	IN `p_perfil` BIT
)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ""
BEGIN
	SELECT publicaciones.*, usuario.foto_perfil, usuario.usuario, usuario.nombre, publicaciones.created_at AS `fecha_creacion`
	FROM publicaciones
	INNER JOIN usuario
		ON usuario.id_usuario = publicaciones.id_usuario
	WHERE ((p_perfil = 0 AND publicaciones.id_usuario <> p_id_usuario) OR (p_perfil = 1 AND publicaciones.id_usuario = p_id_usuario)) AND publicaciones.borrado = 0
	ORDER BY RAND();
END     
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sp_get_autenticacion_usuario');
    }
};
