<?php

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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get("/nac/nodes", [\App\Http\Controllers\Api\NacController::class, "nodes"]);
Route::get("/nac/ips", [\App\Http\Controllers\Api\NacController::class, "ips"]);
Route::get("/nac/wlan", [\App\Http\Controllers\Api\NacController::class, "wlan"]);
Route::get("/nac/log", [\App\Http\Controllers\Api\NacController::class, "log"]);
Route::get("/nac/condition", [\App\Http\Controllers\Api\NacController::class, "condition"]);
Route::get("/histories", [\App\Http\Controllers\Api\HistoryController::class, "index"]);
Route::post("/histories", [\App\Http\Controllers\Api\HistoryController::class, "store"]);
Route::patch("/devices", [\App\Http\Controllers\Api\HistoryController::class, "update"]);


Route::middleware('auth')->group(function () {

});



