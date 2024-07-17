<?php

// 8- Agregar los controladores
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\PresidenteController;
use App\Http\Controllers\EquipopartidoController;
//____
use Illuminate\Support\Facades\Route;


// 9- AGREGAR A RELACION MUCHOS A MUCHOS
Route::get('/equipopartido',[EquipopartidoController::class,'asociar']);
Route::post('/equipopartido/store',[EquipopartidoController::class,'store'])->name('equipopartido.store');


//  Acceder a todas las rutas 
Route::resource('presidente',PresidenteController::class);
Route::get('/presidente/{id}/show', [PresidenteController::class, 'show'])->name('presidente.show');