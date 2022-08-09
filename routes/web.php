<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('home.index');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index');
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos.index');
Route::get('/entrada', [ArticleController::class, 'index'])->name('entrada.index');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');
