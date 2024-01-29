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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [productController::class , 'index']);
Route::get('/product/create', [productController::class , 'create']);
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::resource('products', ProductController::class);

Route::get('delete/{id}','ProductController@remove');

