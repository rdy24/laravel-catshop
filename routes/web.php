<?php

use App\Http\Controllers\CategoriesController;
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
    return view('home');
});

// Route Categories
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/tambah', [CategoriesController::class, 'create']);
Route::post('/categories/store', [CategoriesController::class, 'store']);
Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit']);
Route::put('/categories/update/{id}', [CategoriesController::class, 'update']);
Route::get('/categories/hapus/{id}', [CategoriesController::class, 'delete']);
Route::delete('/categories/destroy/{id}', [CategoriesController::class, 'destroy']);




// Route Transaction
Route::get('/transaction', function(){
    return view('transaction.transaction');
});

Route::get('/transaction/tambah', function() {
    return view('transaction.transaction-entry');
});

Route::get('/transaction/edit', function() {
    return view('transaction.transaction-edit');
});

Route::get('/transaction/hapus', function() {
    return view('transaction.transaction-hapus');
});