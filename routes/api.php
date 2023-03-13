<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\TokenController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/clients', [\App\Http\Controllers\API\ClientController::class, 'index'])->name('clients.api.index');
Route::post('clients/store', [\App\Http\Controllers\API\ClientController::class, 'store'])->name('clients.api.store');
Route::get('/clients/show/{client}', [\App\Http\Controllers\API\ClientController::class, 'show'])->name('clients.api.show');
Route::put('/clients/update/{client}', [\App\Http\Controllers\API\ClientController::class, 'update'])->name('clients.api.update');

Route::middleware('auth:api')->get('/getToken', [\App\Http\Controllers\API\TokenController::class, 'generateToken'])->name('generate.token');
Route::post('/authorise',[App\Http\Controllers\API\AuthController::class,'register'])->name('client.api.register');
