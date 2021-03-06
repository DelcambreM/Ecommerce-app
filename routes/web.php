<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
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

Route::get('/product',[ProductController::class, 'product',]);
Route::get('/products',[ProductsController::class, 'products',]);
Route::get('/contact',[ContactController::class, 'contact']);
Route::get('/categories',[CategoryController::class, 'categories']);
Route::get('/admin',[AdminController::class, 'admin']);
Route::get('dashboard',[DashboardController::class, 'dashboard']);