<?php

use App\Http\Controllers\Api\HealthCheckController;
use App\Http\Controllers\Api\ValidateController;
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
Route::get('/', [ HealthCheckController::class, 'info' ] );
Route::get('/_health', [ HealthCheckController::class, 'health' ] );
Route::get('/validate', [ ValidateController::class, 'validateInput' ] );
