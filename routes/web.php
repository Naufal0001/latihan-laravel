<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [UserController::class,'index']);

Route::get('/index/input', [UserController::class,'input']);
Route::post('/index/input', [UserController::class,'input_data']);

Route::get('/update/{id}', [UserController::class,'edit']);
Route::post('/update/{id}', [UserController::class,'update']);

Route::get('/delete/{id}', [UserController::class,'delete']);
