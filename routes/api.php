<?php

use App\Http\Controllers\Api\AddressController;
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



Route::prefix("/")->group(function() {

    Route::get("/address",[AddressController::class,"index"]);
    Route::post("address/store",[AddressController::class,"store"]);
    Route::get("/address/{address}",[AddressController::class,"show"]);
    Route::put("/update/{address}",[AddressController::class,"update"]);
    Route::delete("/delete/{address}",[AddressController::class,"destroy"]);

});