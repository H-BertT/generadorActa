<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\MatrimonioController;
use App\Http\Controllers\ActaController;

Route::resource('/', PersonaController::class);
Route::resource('personas', PersonaController::class);

Route::get('matrimonio/create', [MatrimonioController::class, 'create'])->name('matrimonio.create');
Route::post('matrimonio/store', [MatrimonioController::class, 'store'])->name('matrimonio.store');

Route::resource('acta', ActaController::class)->only(['index', 'store', 'destroy']);

Route::get('/acta/imprimir/{id}', [ActaController::class, 'imprimirActa'])->name('acta.imprimirActa');

Route::delete('acta/destroy/{id}', [ActaController::class, 'destroy'])->name('acta.destroy');
