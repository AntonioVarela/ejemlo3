<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administradorController;


Route::get('/administrador', [administradorController::class, 'index'])->name('administrador');
Route::post('/administrador/creaUsuario', [administradorController::class, 'creaUsuario'])->name('creaUsuario');
Route::post('/administrador/modificaUsuario/{id}', [administradorController::class, 'modificaUsuario'])->name('modificaUsuario');
Route::get('/administrador/eliminaUsuario/{id}', [administradorController::class, 'eliminaUsuario'])->name('eliminaUsuario');