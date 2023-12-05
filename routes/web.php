<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoiController;
use App\Http\Controllers\Api\KoiApiController;

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

// Route::get('/', function () {
//     return redirect()->route('marketplace.index');
// });

Route::get('/' , [KoiController::class, 'index'])->name('home');

Route::resource('marketplace', KoiController::class);
Route::get('regist-store' , [KoiController::class, 'registForm'])->name('regist.form');
Route::post('regist-store' , [KoiController::class, 'postRegist'])->name('regist.post');
Route::get('login' , [KoiController::class, 'loginForm'])->name('login.form');
Route::get('productbycat' , [KoiController::class, 'ProductByCat'])->name('product.category');




// ROUTING EXTERNAL GET CONTENT
Route::get('ajax/koi/terlaris' , [KoiApiController::class, 'terlaris'])->name('resellr.terlaris');
Route::get('ajax/koi/terbaru' , [KoiApiController::class, 'terbaru'])->name('resellr.terbaru');
Route::get('ajax/resellr/category', [KoiApiController::class, 'category']);
Route::get('ajax/resellr/allproduct', [KoiApiController::class, 'allproduk'])->name('allproduct');