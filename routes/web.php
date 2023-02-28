<?php

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

Route::get('/', [\App\Http\Controllers\FakeController::class, 'index']);
//Route::get('/', [\App\Http\Controllers\FakeController::class, 'index1']);
Route::post('/1', [\App\Http\Controllers\FakeController::class, 'index1'])->name('post.form');

//Route::get('/index', [\App\Http\Controllers\UserController::class, 'index']);
