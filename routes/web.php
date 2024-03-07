<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('login');
//});

Route::get('/register',[\App\Http\Controllers\RegisController::class,'index'])->name('register');
Route::post('/register',[\App\Http\Controllers\RegisController::class,'register'])->name('register');
Route::get('/',[\App\Http\Controllers\LoginController::class,'index'])->name('login');
Route::post('/',[\App\Http\Controllers\LoginController::class,'authenticate'])->name('login');
Route::get('/index',[\App\Http\Controllers\IndexController::class,'index'])->name('index-route');



