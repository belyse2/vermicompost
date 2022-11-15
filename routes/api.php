<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BinController;
use App\Http\Controllers\VermUserController;
use App\Http\Controllers\BinConditionController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\WormTypeController;
use App\Http\Controllers\BinLocationController;
use App\Models\WormType;

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

Route::get('/Bin/search/{name}',[BinController::class,'search']);
Route::resource("/Bin",BinController::class);



Route::resource("/VermUser",VermUserController::class);
Route::get('/VermUser/search/{Fname}',[VermUserController::class,'search']);


Route::resource("/WormType", WormTypeController::class);
Route::get('/VermUser/search/{Fname}',[WormTypeController::class,'search']);



Route::resource("/BinCondition",BinConditionController::class);
Route::get('/BinCondition/search/{}',[BinConditionController::class,'search']);


Route::resource("/Binlocation",BinLocationController::class);
Route::get('/Binlocation/search/{}',[BinLocationController::class,'search']);

