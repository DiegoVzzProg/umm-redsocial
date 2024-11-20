<?php

use App\Http\Controllers\BuscarUsuarioController;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerGeneral;

Route::get(uri: '/login', action: [Login::class, 'Init'])->name(name: 'login');
Route::get(uri: '/ruta/{key}', action: [ControllerGeneral::class, 'desencriptar'])->name(name: 'ruta');

Route::get('/', function () {
    return view(view: 'frontend.home');
})->name(name: 'inicio');

Route::get('/perfil/{IdUsuarioParametro}', function ($IdUsuarioParametro) {
    return view('frontend.perfil', compact('IdUsuarioParametro'));
})->name(name: 'perfil.usuario');

Route::get('/configuracion', function () {
    return view('frontend.configuracion-usuario');
})->name('configuracion');

Route::get('/foto/{filename}/{carpeta}', function ($filename, $carpeta) {

    $path = storage_path('app/private/' . $carpeta . '/' . $filename);

    if (!file_exists($path)) {
        return null;
    }

    return response()->file($path);
})->name('photo.show')->middleware('signed');

Route::get(uri: '/buscar-usuario', action: [BuscarUsuarioController::class, 'Index'])->name(name: 'buscar.usuario');
