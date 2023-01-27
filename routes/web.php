<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
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

Route::view('home-auth', 'home-auth');
Route::view('form', '/layouts/elements/form');
Route::view('data-table', '/layouts/elements/data-table');
Route::view('element-input', '/layouts/elements/element-input');
Route::view('element-select', '/layouts/elements/element-select');
Route::view('element-check', '/layouts/elements/element-check');
Route::view('element-radio', '/layouts/elements/element-radio');
Route::view('element-button', '/layouts/elements/element-button');

Route::get('/', function () {
    return view('home-guest');
})->name('home-guest');

Route::get('about', function () {
    return view('about-us');
})->name('about-us');


Route::get('login',[LoginController::class,'viewLogin'])->name('login');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::get('register',[LoginController::class,'viewRegister'])->name('register');
Route::post('register',[LoginController::class,'register'])->name('register');

Route::get('auth-home',[LoginController::class,'authHome'])->name('home');
