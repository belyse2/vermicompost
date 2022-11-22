<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/','App\Http\Controllers\PageController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//public routes


//Route::post('/register',[AuthController::class,'register']);
Route::get('/User/search/{Fname}',[usercontroller::class,'search']);
Route::get('/Bin/search/{name}',[BinController::class,'search']);
Route::get('/BinCondition/search/{}',[BinConditionController::class,'search']);
Route::get('/WormType/search/{}',[WormTypeController::class,'search']);
Route::get('/User/search/{Fname}',[usercontroller::class,'search']);





// protected routes


Route::group(['middleware' =>['auth:sanctum']], function () {



Route::post('/logout',[AuthController::class,'logout']);
Route::resource("/User",App\Http\usercontroller::class);
Route::resource("/Bin",App\Http\BinController::class);
Route::resource("/BinCondition",App\Http\BinConditionController::class);
Route::resource("/WormType",App\Http\WormTypeController::class);
Route::resource("/User",App\Http\usercontroller::class);


});
