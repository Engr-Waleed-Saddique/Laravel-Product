<?php

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::get('/show/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('add_product',[ProductController::class,'add_product'])->name('product.add');
Route::post('save_product',[ProductController::class,'save_product'])->name('product.save');



