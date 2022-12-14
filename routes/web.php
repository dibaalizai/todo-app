<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ItemController;
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

//Testing Purposes
// Route::get('/products', [ProductController::class, 'index']);

Route::get('/index', [ItemController::class, 'index']);
Route::get('edit/{id}', [ItemController::class, 'edit']);
Route::post('/edit', [ItemController::class, 'update']);
Route::get('delete/{id}', [ItemController::class, 'destroy']);


Route::get('/create', [ItemController::class, 'create']);
Route::post('/items', [ItemController::class, 'store']);



Route::get('/view/{id}', [ItemController::class, 'show']);   


Route::get('/deleteall', [ItemController::class, 'deleteall']);