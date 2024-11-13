<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ControllerGeneral extends Controller
{
    public function desencriptar(Request $request, $key)
    {
        // Desencriptar la ruta
        $decryptedRoute = Crypt::decrypt($key);

        // Convierte los datos del formulario en una cadena de consulta
        $queryString = http_build_query($request->all());

        // Redirigir a la ruta desencriptada con los parámetros de consulta
        return redirect($decryptedRoute . '?' . $queryString);
    }

    public static function simplificar_num($numero)
    {
        $sufijos = ['', 'K', 'M'];
        $index = 0;

        while ($numero >= 1000 && $index < count($sufijos) - 1) {
            $numero /= 1000;
            $index++;
        }

        return round($numero, 1) . $sufijos[$index];
    }

    public static function ObtenerFotoURL($filename, $carpeta)
    {
        if (Storage::exists($carpeta . '/' . $filename)) {
            $url = URL::temporarySignedRoute(
                'photo.show',
                now()->addMinutes(5),
                ['filename' => $filename, 'carpeta' => $carpeta]
            );
        } else {
            $url = '';
        }
        return $url;
    }

    public static function GoToPerfil($id_usuario)
    {
        $id_usuario_desencrypt = Crypt::decryptString($id_usuario);
        $uuid = Str::uuid()->toString();
        session()->put($uuid, $id_usuario_desencrypt);

        return redirect()->route('perfil.usuario', ['IdUsuarioParametro' => $uuid]);
    }
    public static $tipo = '';
    public static $mensaje = '';

    public static function ExecuteStoreProcedure($store, $parameters): mixed
    {
        try {
            $parametros_enviar = '(' . implode(', ', array_fill(0, count($parameters), '?')) . ')';
            $response = DB::select(query: 'CALL ' . $store . $parametros_enviar, bindings: $parameters);
            return self::JsonToArray(json: $response);
        } catch (Exception $e) {
            self::$tipo = 'error';
            self::$mensaje = $e->getMessage();
            return [];
        }
    }

    protected static function JsonToArray($json): mixed
    {
        return json_decode(json: json_encode(value: $json), associative: true);
    }
}
