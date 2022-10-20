<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\ComentarioController;
use App\Http\Controllers\Api\V1\PromocionController;
use App\Http\Controllers\Api\V1\ReservaController;
use App\Http\Controllers\Api\V1\ServicioController;
use App\Http\Controllers\Api\V1\SitioController;
use App\Models\Sitio;

Route::post('register', [RegisterController::class,'store'])->name('api.v1.register');
// Route::post('category', [CategoryController::class,'store'])->name('api.v1.category');

// Route::post('comentario', [ComentarioController::class,'store'])->name('api.v1.comentario');
// Route::post('promocion', [PromocionController::class,'store'])->name('api.v1.promocion');
// Route::post('reserva', [ReservaController::class,'store'])->name('api.v1.reserva');
// Route::post('servicio', [ServicioController::class,'store'])->name('api.v1.servicio');

Route::get('sitios', [SitioController::class,'index'])->name('api.v1.sitios.index');
Route::post('sitios', [SitioController::class,'store'])->name('api.v1.sitios.store');
Route::get('sitios/{sitio}', [SitioController::class,'show'])->name('api.v1.sitios.show');
Route::put('sitios/{sitio}', [SitioController::class,'update'])->name('api.v1.sitios.update');
Route::delete('sitios/{sitio}', [SitioController::class,'destroy'])->name('api.v1.sitios.delete');

Route::get('hola', function () {
    return 'hola';
});
// Route::apiResource('sitios', Sitio::class)->only(['index','show', 'destroy'])->middleware('auth:sanctum');
Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);