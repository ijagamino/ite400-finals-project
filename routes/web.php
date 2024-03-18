<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminFlavorController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::view('/', 'pages.index')->name('home');
Route::view('/about', 'pages.about');
Route::view('/contact', 'contacts.contact');

Route::get('/menu', [ProductController::class, 'index']);
Route::get('/results', [ProductController::class, 'search']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::get('/overview', [SessionController::class, 'index'])->middleware('auth');
Route::get('/profile', [SessionController::class, 'edit'])->middleware('auth');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/cart', [CartItemController::class, 'index']);
Route::put('/cart/{product:slug}/{flavor:slug}/add', [CartItemController::class, 'add']);
Route::put('/cart/{product:slug}/{flavor:slug}/subtract', [CartItemController::class, 'subtract']);
Route::delete('/cart/{product:slug}/{flavor:slug}', [CartItemController::class, 'destroy']);
Route::post('/cart', [CartItemController::class, 'store']);

Route::post('/order', [OrderController::class, 'store']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/profile', [AdminController::class, 'edit'])->middleware('admin');

Route::get('/admin/flavors', [AdminFlavorController::class, 'index'])->middleware('admin');
Route::get('/admin/flavors/create', [AdminFlavorController::class, 'create'])->middleware('admin');
Route::get('/admin/flavors', [AdminFlavorController::class, 'store'])->middleware('admin');

Route::get('/admin/products', [AdminProductController::class, 'index'])->middleware('admin');
Route::get('/admin/products/{product:slug}/edit', [AdminProductController::class, 'edit'])->middleware('admin');
Route::patch('/admin/products/{product:slug}', [AdminProductController::class, 'update'])->middleware('admin');
Route::delete('/admin/products/{product:slug}', [AdminProductController::class, 'destroy'])->middleware('admin');

Route::get('/admin/products/create', [AdminProductController::class, 'create'])->middleware('admin');
Route::post('/admin/products', [AdminProductController::class, 'store'])->middleware('admin');
