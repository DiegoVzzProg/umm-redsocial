<?php

namespace App\Http\Controllers;

class SpUsuariosController extends Controller
{
    public static function sp_get_autenticacion_usuario(ParamUsuariosController $parametros)
    {
        $MySQlParam = [
            $parametros->p_email,
            $parametros->p_contraseña
        ];
        return ControllerGeneral::ExecuteStoreProcedure(store: "sp_get_autenticacion_usuario", parameters: $MySQlParam);
    }

    public static function sp_obtener_estadisticas_usuario(ParamUsuariosController $parametros)
    {
        $MySQlParam = [$parametros->id_usuario];

        return ControllerGeneral::ExecuteStoreProcedure(store: "sp_obtener_estadisticas_usuario", parameters: $MySQlParam);
    }

    public static function sp_buscar_usuario_x_valor_o_id_usuario(ParamUsuariosController $parametros)
    {
        $MySQlParam = [$parametros->p_usuario, $parametros->id_usuario];

        return ControllerGeneral::ExecuteStoreProcedure(store: "sp_buscar_usuario_x_valor_o_id_usuario", parameters: $MySQlParam);
    }
}
