<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CashboxController;
use Illuminate\Support\Facades\Route;

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

// Auth routes
Route::group(['prefix' => 'auth'], function () {
    Route::post('register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});

// Public routes
Route::get('test', [CashboxController::class, 'test']);

// Authenticated users
Route::group(['middleware' => ['auth:sanctum', 'age:18']], function () {

Route::apiResource('cashboxes', CashboxController::class);

});

// Fallback route
Route::fallback([AuthController::class, 'fallback']);
