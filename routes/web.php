<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/products',[PagesController::class,'products'])->name('products');
Route::get('/store',[PagesController::class,'store'])->name('store');
