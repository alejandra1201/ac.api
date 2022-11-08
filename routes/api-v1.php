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
Route::post('categories', [CategoryController::class,'store'])->name('api.v1.categories.store');


Route::get('comentarios', [ComentarioController::class,'index'])->name('api.v1.comentarios.index');
Route::post('comentarios', [ComentarioController::class,'store'])->name('api.v1.comentarios.store');


Route::get('promocions', [PromocionController::class,'index'])->name('api.v1.promocions.index');
Route::post('promocions', [PromocionController::class,'store'])->name('api.v1.promocions.store');


Route::get('reservas', [ReservaController::class,'index'])->name('api.v1.reservas.index');
Route::post('reservas', [ReservaController::class,'store'])->name('api.v1.reservas.store');



Route::get('servicios', [ServicioController::class,'index'])->name('api.v1.servicios.index');
Route::post('servicios', [ServicioController::class,'store'])->name('api.v1.servicios.store');

Route::get('sitios', [SitioController::class,'index'])->name('api.v1.sitios.index');
Route::post('sitios', [SitioController::class,'store'])->name('api.v1.sitios.store');


Route::get('hola', function () {
    // return 'hola';
});

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);