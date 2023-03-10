<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\TokenController;
use App\Http\Controllers\API\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.api.index');
    Route::post('clients/store', [ClientController::class, 'store'])->name('clients.api.store');
    Route::get('/clients/show/{client}', [ClientController::class, 'show'])->name('clients.api.show');
    Route::put('/clients/update/{client}', [ClientController::class, 'update'])->name('clients.api.update');
});
Route::middleware('auth:api')->get('/getToken', [TokenController::class, 'generateToken'])->name('generate.token');


Route::middleware('auth:sanctum')->group(function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home.api.index');
    Route::post('/home/store', [HomeController::class, 'store'])->name('home.api.store');
});
