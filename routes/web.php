<?php

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\ControllerLista;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;

Route::get(uri: '/', action: [Login::class, 'Init'])->name(name: 'login');
Route::get(uri: '/perfil/{usuario}', action: [PerfilController::class, 'Init'])->name(name: 'perfil.usuario');
Route::get(uri: '/ruta/{key}', action: [ControllerGeneral::class, 'desencriptar'])->name(name: 'ruta');
Route::get(uri: '/foto', action: [ControllerGeneral::class, 'desencriptar'])->name(name: 'ruta');

Route::get('/foto/{filename}', function ($filename) {
    $path = storage_path('app/private/usuarios_fotos/' . $filename);

    if (!file_exists($path)) {
        abort(404, 'Foto no encontrada');
    }

    return response()->file($path);
})->name('photo.show')->middleware('signed');

Route::get(uri: '/inicio', action: [HomeController::class, 'Init'])->name(name: 'inicio');
