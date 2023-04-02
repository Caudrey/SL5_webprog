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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/welcomePage', function () {
    return view('welcomePage');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/sidebar', function () {
    return view('layouts/sidebar');
});