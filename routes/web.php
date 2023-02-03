<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// Route::view('/','index');
Route::get('/', [UserController::class,'index']);
Route::view('/login','index');
Route::get('/check', [UserController::class,'check']);

Route::get('/profile', [UserController::class,'profile']);
Route::get('/logout', [UserController::class,'logout']);
Route::post('users', [UserController::class,'index']);