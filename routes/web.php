<?php

use App\Http\Controllers\kategoriController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return redirect('/');
});
Route::resource('/products',ProductController::class);
Route::get('/products/view/{view}', [ProductController::class,'index']);
Route::get('/products/category/{catid}', [ProductController::class,'showProductsByCategory']);

Route::get('/kategori', [kategoriController::class,'index']);

Route::get('/about', function () {
    return view('about');
});

