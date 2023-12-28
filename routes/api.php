<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PositionController;


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


Route::get('/get-positions',[PositionController::class,'getPositionList']);
//Route::post('/location-and-sub-locations',[PositionController::class,'locationAndSubLocation']);
Route::post('/dummy-testing-api',[PositionController::class,'dummyTestingApi']);

