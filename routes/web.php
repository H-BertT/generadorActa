<!-- Este es web.php -->
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\MatrimonioController;
use App\Http\Controllers\ActaController;
use App\Http\Controllers\CrearInvitacionController;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreosMailable;

Route::resource('/', PersonaController::class);
Route::resource('personas', PersonaController::class);

Route::get('matrimonio/create', [MatrimonioController::class, 'create'])->name('matrimonio.create');
Route::post('matrimonio/store', [MatrimonioController::class, 'store'])->name('matrimonio.store');

Route::resource('acta', ActaController::class)->only(['index', 'store', 'destroy']);

Route::get('/acta/imprimir/{id}', [ActaController::class, 'imprimirActa'])->name('acta.imprimirActa');

Route::delete('acta/destroy/{id}', [ActaController::class, 'destroy'])->name('acta.destroy');

Route::get('acta/crear-invitacion/{id}', [CrearInvitacionController::class, 'create'])->name('acta.crearInvitacion');
// Route::post('acta/crear-invitacion', [CrearInvitacionController::class, 'store'])->name('acta.crearInvitacion.store');


Route::get('correos', [CrearInvitacionController::class, 'index'])->name('correos.index');
Route::post('correos', [CrearInvitacionController::class, 'store'])->name('correos.store');
