<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\LanguajeController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['prefix' => 'testing'], function(){
    Route::get('/testingConnection', [TestingController::class, 'connectionDB']);
    Route::get('/', [TestingController::class, 'index']);
});

Route::group(['prefix' => 'languaje'], function(){
    Route::get('/searchLanguaje', [LanguajeController::class, 'searchLanguaje']);

    Route::post('/addDataType', [LanguajeController::class, 'addDataType']);
});
