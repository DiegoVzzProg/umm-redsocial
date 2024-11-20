<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpPublicacionesController extends Controller
{
    public static function sp_get_publicaciones_usuarios(ParamPublicacionesController $parametros)
    {
        $MySQlParam = [
            $parametros->p_id_usuario,
            $parametros->p_perfil
        ];
        return ControllerGeneral::ExecuteStoreProcedure(store: "sp_get_publicaciones_usuarios", parameters: $MySQlParam);
    }

    public static function sp_a_publicaiones_usuario(ParamPublicacionesController $parametros)
    {
        $MySQlParam = [
            $parametros->p_id_usuario,
            $parametros->p_contenido,
            $parametros->p_imagen,
        ];
        return ControllerGeneral::ExecuteStoreProcedure(store: "sp_a_publicaiones_usuario", parameters: $MySQlParam);
    }

    public static function sp_get_publicaciones_reciente_usuario(ParamPublicacionesController $parametros)
    {
        $MySQlParam = [
            $parametros->p_id_usuario,
        ];
        return ControllerGeneral::ExecuteStoreProcedure(store: "sp_get_publicaciones_reciente_usuario", parameters: $MySQlParam);
    }
}
