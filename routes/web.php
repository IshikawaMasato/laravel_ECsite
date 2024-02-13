<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ResetPasswordController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [UserController::class, 'index']);
Route::get('/show/{id}', [UserController::class, 'detail'])->name('user.detail');
Route::get('/search', [UserController::class, 'search']);

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/product_list', [AdminController::class, 'product_list'])->name('product_list');
Route::get('/admin/product_register', [AdminController::class, 'product_register'])->name('product_register');
Route::post('/admin/product_create', [AdminController::class, 'product_create'])->name('product_create');
Route::get('/admin/product_edit/{id}', [AdminController::class, 'product_edit'])->name('product_edit');
Route::post('/admin/product_edit/{id}', [AdminController::class, 'product_update'])->name('product_update');
Route::get('/admin/product_destroy/{id}', [AdminController::class, 'product_delete'])->name('product_delete');

Route::get('/admin/category_list', [AdminController::class, 'category_list'])->name('category_list');
Route::get('/admin/category_register', [AdminController::class, 'category_register'])->name('category_register');
Route::post('/admin/category_create', [AdminController::class, 'category_create'])->name('category_create');
Route::get('/admin/category_edit/{id}', [AdminController::class, 'category_edit'])->name('category_edit');
Route::post('/admin/category_edit/{id}', [AdminController::class, 'category_update'])->name('category_update');
Route::get('/admin/category_destroy/{id}', [AdminController::class, 'category_delete'])->name('category_delete');
