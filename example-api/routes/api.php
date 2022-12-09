<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::prefix('api')
    ->middleware('auth:sanctum')
    ->group(function () {
        // /api/message/123
        Route::get('message/{id}', [ApiController::class, 'show']);

        // /api/message
        Route::post('message', [ApiController::class, 'store']);

        // /api/message/456
        Route::put('message/{id}', [ApiController::class, 'update']);

        // /api/message/789
        Route::delete('message/{id}', [ApiController::class, 'destroy']);
    });
