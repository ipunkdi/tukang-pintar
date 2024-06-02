<?php

use App\Http\Controllers\Api\CraftsmanController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\JobRequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Tupin-Api-Customer
Route::post('customers', [CustomerController::class, 'store']);
Route::put('customers/{id}', [CustomerController::class, 'update']);
Route::post('customregister', [CustomerController::class, 'register']);
Route::post('customlogin', [CustomerController::class, 'login']);

// Tupin-Api-Craftsman
Route::get('craftsmen', [CraftsmanController::class, 'index']);
Route::post('craftsmen', [CraftsmanController::class, 'store']);
Route::put('craftsmen/{id}', [CraftsmanController::class, 'update']);

// Tupin-Api-JobRequest
Route::get('order', [JobRequestController::class, 'index']);
Route::post('order', [JobRequestController::class, 'store']);
Route::get('order/{id}', [JobRequestController::class, 'show']);