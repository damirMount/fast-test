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

Route::post('/register', [\App\Http\Controllers\API\AuthController::class, 'register'])->name('register.api.store');

Route::post('/fileBase64', [\App\Http\Controllers\API\FileBase64Controller::class, 'store'])->name('fileBase64');

Route::post('/upload-files', function (Request $request){
   $data = base64_decode($request->input('img'));
   $nameUniq = uniqid('file_');
   Storage::put("avatars/$nameUniq". '.jpg', $data);

//   $data = base64_encode(Storage::get("avatars/$nameUniq.".$request->input('ext')));
});
