<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CharacterController;

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
})->name("home");

////

Route::resource('/personnage', PersonnageController::class,);

Route::get('/register', [RegisterController::class, 'regist'])->name("regist");
Route::post('/register', [RegisterController::class, 'register'])->name("register");

Route::get('/login', [LoginController::class, 'log'])->name('log');
Route::post('/login', [LoginController::class, 'login'])->name("login");

// Route::resource('/post', \App\Http\Controllers\PostController::class);

Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');

Route::post('/characters/store', [CharacterController::class, 'store'])->name('characters.store');

Route::get('/character/home', [CharacterController::class, 'home'])->name('characters.home');
