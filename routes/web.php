<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReserveController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// ปุ่มออกจากระบบ
Route::get('/admin/logout',[ProfileController::class, 'logout'])->name('logout');

//เมนูสินค้า
Route::get('admin/product/index',[ProductController::class, 'index']);
Route::get('admin/product/create',[ProductController::class, 'create']);
Route::post('admin/product/insert',[ProductController::class, 'insert']);
Route::get('admin/product/delete/{id}',[ProductController::class, 'delete']);
Route::get('admin/product/edit/{id}',[ProductController::class, 'edit']);
Route::post('admin/product/update/{id}',[ProductController::class, 'update']);




//เมนูประเภทสินค้า
Route::get('admin/category/index',[CategoryController::class, 'index']);
Route::get('admin/category/create',[CategoryController::class, 'create']);
Route::post('admin/category/insert',[CategoryController::class, 'insert']);
Route::get('admin/category/edit/{id}',[CategoryController::class, 'edit']);
Route::post('admin/category/update/{id}',[CategoryController::class, 'update']);
Route::get('admin/category/delete/{id}',[CategoryController::class, 'delete']);

//เมนูการจอง
Route::get('admin/reserve/index',[ReserveController::class, 'index']);
