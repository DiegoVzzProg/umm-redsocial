<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
}
