<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApartmentController;
use \App\Http\Controllers\ProductController;

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

Route::resources([
    'homes' => \App\Http\Controllers\HomeController::class,
    'apartments' => \App\Http\Controllers\ApartmentController::class,
    'clients' => \App\Http\Controllers\ClientController::class,
    'sales' => \App\Http\Controllers\SaleController::class,
]);

//Auth::routes();
Route::get('/get-home-info', [App\Http\Controllers\HomeController::class, 'getHome'])->name('get.home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get-apartments-info', [App\Http\Controllers\ApartmentController::class, 'getApartments'])->name('get.apartments');
Route::post('/add-home', [App\Http\Controllers\HomeController::class, 'addHome'])->name('add.home');
Route::get('/getLastHome', [App\Http\Controllers\HomeController::class, 'getLastHome'])->name('getLastHome');

Route::get('get-apart', [App\Http\Controllers\ApartmentController::class, 'getApart'])->name('get.apart');

Route::resource('products', \App\Http\Controllers\ProductController::class);

