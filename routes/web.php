<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function () {
    return 'Hola mundito cruel!!!';
});
Route::get('/holis', function () {
    return view('peliculas.hola');
});
Route::resource('pelicula', PeliculaController::class); //====> Conjunto de rutas CRUD
// Route::get('pelicula', [PeliculaController::class,'index'])->name('pelicula.index'); ====> Creación de rutas manualmente