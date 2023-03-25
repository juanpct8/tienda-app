<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





/* Route::controller(ProductoController::class)->group(function(){
    Route::get("productos", "index")->name('productos.index');
    Route::get("productos/create", "create")->name('productos.create');
    Route::post("productos", 'store')->name('productos.store');
    Route::get("productos/{producto}", "show")->name('productos.show');
    Route::get("productos/{producto}/edit", "edit")->name('productos.edit');
    Route::put('productos/{producto}','update')->name('productos.update');
    Route::delete('productos/{producto}', 'destroy')->name('productos.destroy');
}); */

Route::resource('productos', ProductoController::class);
Route::get("/", InicioController::class)->name("inicio");
Route::view('contacto', 'contacto')->name('contacto');
Route::view('login', 'auth.login')->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


