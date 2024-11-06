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

    public static function ObtenerFotoURL($filename)
    {
        if (Storage::exists('usuarios_fotos/' . $filename)) {
            $url = URL::temporarySignedRoute(
                'photo.show',
                now()->addMinutes(30),
                ['filename' => $filename]
            );
        } else {
            $url = '';
        }
        return $url;
    }

    public function ExecuteStoreProcedure($store, $parameters): mixed
    {
        try {
            $response = DB::select(query: 'CALL ' . $store . '(?)', bindings: $parameters);
            return $this->JsonToArray(json: $response);
        } catch (Exception $e) {
            return $this->JsonToArray(json: $this->CreateMessage(message: $e->getMessage(), status: 599, type: "error"));
        }
    }

    protected function JsonToArray($json): mixed
    {
        return json_decode(json: json_encode(value: $json), associative: true);
    }

    protected function CreateMessage($message, $status, $type): JsonResponse
    {
        return response()->json(data: [
            'type' => $type,
            'message' => $message,
        ], status: $status);
    }

    public static function GoToPerfil($id_usuario)
    {
        $id_usuario_desencrypt = Crypt::decryptString($id_usuario);
        $uuid = Str::uuid()->toString();
        session()->put($uuid, $id_usuario_desencrypt);

        return redirect()->route('perfil.usuario', ['IdUsuarioParametro' => $uuid]);
    }
}
