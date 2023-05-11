<?php

use App\Http\Controllers\API\TokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClientController;
use Illuminate\Support\Facades\Storage;

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

Route::get('/clients', [\App\Http\Controllers\API\ClientController::class, 'index'])->name('clients.api.index');
Route::post('clients/store', [\App\Http\Controllers\API\ClientController::class, 'store'])->name('clients.api.store');
Route::get('/test', function (Request $request) {
    dd($request->param1);
});

Route::post('/upload-files', function (Request $request) {


    $data = base64_decode($request->input('img'));
    $nameUniq = uniqid('file_');
    Storage::put("avatars/$nameUniq." . $request->input('ext'), $data);

    $data = base64_encode(Storage::get("avatars/$nameUniq." .$request->input('ext')));

    dd($data);
});

Route::middleware('auth:sanctum')->get('clients', [ClientController::class, 'index'])->name('clients.api.index');
Route::get('/clients/show/{client}', [ClientController::class, 'show'])->name('clients.api.show');

Route::middleware('auth')->get('/getToken', [TokenController::class, 'generateToken'])->name('generate.token');

Route::post('/clients/update/{client}', [ClientController::class, 'update'])->name('clients.api.update');
