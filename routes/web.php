<?php

use Illuminate\Support\Facades\Route;

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
route::get('/',[App\Http\Controllers\rmsController::class,'index']);
route::get('index',[App\Http\Controllers\rmsController::class,'index']);
route::get('aboutus',[App\Http\Controllers\rmsController::class,'aboutus']);
route::get('contactus',[App\Http\Controllers\rmsController::class,'contactus']);