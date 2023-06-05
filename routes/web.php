<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('index');


Route::get('battle', [\App\Http\Controllers\BattleController::class, 'index']);
Route::get('battle/start', [\App\Http\Controllers\BattleController::class, 'start'])->name('battle.start');

Route::resources([
    'homes' => \App\Http\Controllers\HomeController::class,
    'apartments' => \App\Http\Controllers\ApartmentController::class,
    'clients' => \App\Http\Controllers\ClientController::class,
    'sales' => \App\Http\Controllers\SaleController::class,
]);

Route::get('/get-home-info', [\App\Http\Controllers\HomeController::class, 'getHome'])->name('get.home');

Auth::routes();

Route::get('get-apart', [\App\Http\Controllers\HomeController::class, 'add'])->name('add.apart');

Route::resource('products', ProductController::class);
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
