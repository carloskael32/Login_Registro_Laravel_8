<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
})->middleware('auth');


Route::get('/home', function () {
    return view('home');
})->middleware('auth');

//login
Route::get('/login',[SessionsController::class,'create'])->name('login.index')->middleware('guest');

Route::post('/login',[SessionsController::class,'store'])->name('login.store');

Route::get('/logout',[SessionsController::class, 'destroy'])->name('login.destroy')->middleware('auth');

//registro
Route::get('/register',[RegisterController::class,'create'])->name('register.index')->middleware('guest');

Route::post('/register', [RegisterController::class,'store'])->name('register.store');

