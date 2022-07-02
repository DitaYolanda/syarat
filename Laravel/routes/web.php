<?php

use App\Http\Controllers\ProdukController;

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


Route::get('/produk', [ProdukController::class,'index']);

Route::get('/produk/create',  [ProdukController::class,'create']);
Route::post('/produk/create', [ProdukController::class,'store']);
Route::post('/produk/{produk}/edit', [ProdukController::class,'Edit'])->name('produk.edit');
Route::post('/produk/{produk}', [ProdukController::class,'update'])->name('produk.update');
Route::post('/produk/{produk}', [ProdukController::class,'destroy'])->name('produk.destroy');

