<?php

use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
Auth::routes();
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('index');

Route::resources([
    'homes' => \App\Http\Controllers\HomeController::class,
    'apartments' => \App\Http\Controllers\ApartmentController::class,
    'clients' => \App\Http\Controllers\ClientController::class,
    'sales' => \App\Http\Controllers\SaleController::class,
]);


Route::view('/multi-file', 'test-page');

Route::post('submit', function (\Illuminate\Http\Request $request) {
    foreach ($request->qwerties as $querty) {
// Save the file to the storage directory
        Storage::disk('public')->put($querty->getClientOriginalName(), file_get_contents($querty));
    }
})->name('submit');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
