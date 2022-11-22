<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BinController;
use App\Http\Controllers\VermUserController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\BinConditionController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\WormTypeController;
use App\Http\Controllers\AuthController;

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





//public routes


    Route::post('/register',[AuthController::class,'register']);
    Route::get('/User/search/{Fname}',[usercontroller::class,'search']);
    Route::get('/Bin/search/{name}',[BinController::class,'search']);
    Route::get('/BinCondition/search/{}',[BinConditionController::class,'search']);
    Route::get('/WormType/search/{}',[WormTypeController::class,'search']);
    Route::get('/User/search/{Fname}',[usercontroller::class,'search']);





// protectd routes


    Route::group(['middleware' =>['auth:sanctum']], function () {



    Route::post('/logout',[AuthController::class,'logout']);
    Route::resource("/User",usercontroller::class);
    Route::resource("/Bin",BinController::class);
    Route::resource("/BinCondition",BinConditionController::class);
    Route::resource("/WormType",WormTypeController::class);
    Route::resource("/User",usercontroller::class);


});

















// app/Http/routes.php,
    Route::get('/welcome',function() {return view('welcome');});

