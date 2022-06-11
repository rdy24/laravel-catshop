<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TransactionController;

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
    return view('home');
});

// Route Categories
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/tambah', [CategoriesController::class, 'create']);
Route::post('/categories/store', [CategoriesController::class, 'store']);
Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit']);
Route::put('/categories/update/{id}', [CategoriesController::class, 'update']);
Route::get('/categories/hapus/{id}', [CategoriesController::class, 'delete']);
Route::get('/categories/destroy/{id}', [CategoriesController::class, 'destroy']);

// Route Transaction
Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction/tambah', [TransactionController::class, 'create']);
Route::post('/transaction/store', [TransactionController::class, 'store']);
Route::get('/transaction/edit/{id}', [TransactionController::class, 'edit']);
Route::put('/transaction/update/{id}', [TransactionController::class, 'update']);
Route::get('/transaction/hapus/{id}', [TransactionController::class, 'delete']);
Route::get('/transaction/destroy/{id}', [TransactionController::class, 'destroy']);
