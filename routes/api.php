<?php

use App\Http\Controllers\TransactionApiController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/transaction', [TransactionController::class, 'index']);

Route::resource('/transaction', TransactionApiController::class);

Route::middleware(['auth', 'role:admin'])->group(function() {
    
});