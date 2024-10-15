<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

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
}
