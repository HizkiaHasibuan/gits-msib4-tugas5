<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [ProductController::class, 'home']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/add', [CategoryController::class, 'store']);
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{id}/update', [CategoryController::class, 'update']);
Route::get('/category/{id}/delete', [CategoryController::class, 'destroy']);


Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/add', [ProductController::class, 'store']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}/update', [ProductController::class, 'update']);
Route::get('/product/{id}/delete', [ProductController::class, 'destroy']);


Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/{id}/add', [CartController::class, 'create']);
Route::get('/cart/{id}/min', [CartController::class, 'min']);
Route::get('/cart/{id}/plus', [CartController::class, 'plus']);
