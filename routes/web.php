<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerGeneral;

Route::get(uri: '/login', action: [Login::class, 'Init'])->name(name: 'login');
Route::get(uri: '/ruta/{key}', action: [ControllerGeneral::class, 'desencriptar'])->name(name: 'ruta');

Route::get('/', function () {
    return view(view: 'frontend.home');
})->name(name: 'inicio');

Route::get('/perfil={IdUsuarioParametro}', function ($IdUsuarioParametro) {
    return view('frontend.perfil', compact('IdUsuarioParametro'));
})->name(name: 'perfil.usuario');

Route::get('/configuracion', function () {
    return view('frontend.configuracion-usuario');
})->name('configuracion');

Route::get('/foto/{filename}', function ($filename) {
    $path = storage_path('app/private/usuarios_fotos/' . $filename);

    if (!file_exists($path)) {
        abort(404, 'Foto no encontrada');
    }

    return response()->file($path);
})->name('photo.show')->middleware('signed');
