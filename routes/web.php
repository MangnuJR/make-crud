<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


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

Route::get('/',[BlogController::class,'index']);
Route::get('/create',[BlogController::class,'create']);
Route::post('/store',[BlogController::class,'store']);
Route::get('/edit/{id}',[BlogController::class,'edit']);
Route::post('/update/{id}',[BlogController::class,'update']);
Route::get('/destroy/{id}',[BlogController::class,'destroy']);