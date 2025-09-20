<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administradorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/administrador', [administradorController::class, 'index'])->name('administrador');
Route::post('/administrador/creaUsuario', [administradorController::class, 'creaUsuario'])->name('creaUsuario');
Route::post('/administrador/modificaUsuario/{id}', [administradorController::class, 'modificaUsuario'])->name('modificaUsuario');
Route::get('/administrador/eliminaUsuario/{id}', [administradorController::class, 'eliminaUsuario'])->name('eliminaUsuario');
Route::post('/login', [administradorController::class, 'login'])->name('login');
Route::get('/mascotas', [administradorController::class, 'indexMascotas'])->name('mascotas-index');
Route::post('/mascotas/creaMascota', [administradorController::class, 'creaMascota'])->name('creaMascota');
Route::post('/mascotas/eliminaMascota/{id}', [administradorController::class, 'eliminaMascota'])->name('eliminaMascota');
Route::post('/mascotas/modificaMascota/{id}', [administradorController::class, 'modificaMascota'])->name('modificaMascota');