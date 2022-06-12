<?php

use App\Http\Controllers\OzonController;
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

Route::get('/DeliveryVariants', [OzonController::class, 'DeliveryVariants']);
Route::get('/DeliveryCityList', [OzonController::class, 'DeliveryCityList']);
Route::get('/getVariantsByCity', [OzonController::class, 'getVariantsByCity']);
Route::get('/getVariants', [OzonController::class, 'getVariants']);
