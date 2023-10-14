<?php

use App\Http\Controllers\MutasiController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index']);
Route::get('/order/{id}', [OrderController::class, 'create']);
Route::get('/bayar/{id}', [OrderController::class, 'show']);
Route::get('/orders', [OrderController::class, 'orders']);
Route::get('/mutasi', [MutasiController::class, 'index']);
Route::post('/transaksi', [OrderController::class, 'store']);
Route::post('/bayar', [MutasiController::class, 'store']);
