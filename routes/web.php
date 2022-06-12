<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OzonController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/DeliveryVariants', [OzonController::class, 'DeliveryVariants']);
Route::get('/DeliveryCityList', [OzonController::class, 'DeliveryCityList']);
Route::get('/getVariantsByCity', [OzonController::class, 'getVariantsByCity']);
Route::get('/getVariants', [OzonController::class, 'getVariants']);