<?php

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

use App\Http\Controllers\CardapioController;

Route::get('/', [CardapioController::class, 'index']);
Route::get('/cardapio/info', [CardapioController::class, 'info']);
Route::get('/cardapio/create', [CardapioController::class, 'create'])->middleware('auth');
Route::post('/cardapio', [CardapioController::class, 'store']);
Route::delete('/reserva/{id}', [CardapioController::class, 'destroy']);
Route::get('/reserva/{id}', [CardapioController::class, 'edit'])->middleware('auth');

Route::get('/reserva', [CardapioController::class, 'reserva'])->middleware('auth');

Route::post('/reserva', [CardapioController::class, 'dash'])->middleware('auth');

Route::get('/dashboard', [CardapioController::class, 'dashboard'])->middleware('auth');
