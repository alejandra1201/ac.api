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
use App\Models\Category;
use App\Models\Promocion;
use App\Models\Sitio;

Route::post('register', [RegisterController::class,'store'])->name('api.v1.register');


Route::get('categories', [CategoryController::class,'index'])->name('api.v1.categories.index');
// Route::post('categories', [CategoryController::class,'store'])->name('api.v1.categories.store');
// Route::get('categories/{category}', [CategoryController::class,'show'])->name('api.v1.categories.show');
// Route::put('categories/{category}', [CategoryController::class,'update'])->name('api.v1.categories.update');
// Route::delete('categories/{category}', [CategoryController::class,'destroy'])->name('api.v1.categories.delete');





Route::get('comentarios', [ComentarioController::class,'index'])->name('api.v1.comentarios.index');
// Route::post('comentarios', [ComentarioController::class,'store'])->name('api.v1.comentarios.store');
// Route::get('comentarios/{comentario}', [ComentarioController::class,'show'])->name('api.v1.comentarios.show');
// Route::put('comentarios/{comentario}', [ComentarioController::class,'update'])->name('api.v1.comentarios.update');
// Route::delete('comentarios/{comentario}', [ComentarioController::class,'destroy'])->name('api.v1.comentarios.delete');


Route::get('promocions', [PromocionController::class,'index'])->name('api.v1.promocions.index');
// Route::post('promocions', [PromocionController::class,'store'])->name('api.v1.promocions.store');
// Route::get('promocions/{PromocioPromocion}', [PromocionController::class,'show'])->name('api.v1.promocions.show');
// Route::put('promocions/{Promocion}', [PromocionController::class,'update'])->name('api.v1.promocions.update');
// Route::delete('promocions/PromocioPromocion}', [PromocionController::class,'destroy'])->name('api.v1.promocions.delete');


Route::get('reservas', [ReservaController::class,'index'])->name('api.v1.reservas.index');
// Route::post('reservas', [ReservaController::class,'store'])->name('api.v1.reservas.store');
// Route::get('reservas/{reserva}', [ReservaController::class,'show'])->name('api.v1.reservas.show');
// Route::put('reservas/{reserva}', [ReservaController::class,'update'])->name('api.v1.reservas.update');
// Route::delete('reservas/{reserva}', [ReservaController::class,'destroy'])->name('api.v1.reservas.delete');


Route::get('servicios', [ServicioController::class,'index'])->name('api.v1.servicios.index');
Route::post('servicios', [ServicioController::class,'store'])->name('api.v1.servicios.store');


// Route::get('servicios/{servicio}', [ServicioController::class,'show'])->name('api.v1.servicios.show');
// Route::put('servicios/{servicio}', [ServicioController::class,'update'])->name('api.v1.servicios.update');
// Route::delete('servicios/{servicio}', [ServicioController::class,'destroy'])->name('api.v1.servicios.delete');



Route::get('sitios', [SitioController::class,'index'])->name('api.v1.sitios.index');
// Route::post('sitios', [SitioController::class,'store'])->name('api.v1.sitios.store');
// Route::get('sitios/{sitio}', [SitioController::class,'show'])->name('api.v1.sitios.show');
// Route::put('sitios/{sitio}', [SitioController::class,'update'])->name('api.v1.sitios.update');
// Route::delete('sitios/{sitio}', [SitioController::class,'destroy'])->name('api.v1.sitios.delete');

Route::get('hola', function () {
    return 'hola';
});
// Route::apiResource('sitios', Sitio::class)->only(['index','show', 'destroy'])->middleware('auth:sanctum');
Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);