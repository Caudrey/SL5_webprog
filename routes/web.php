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
    return view('welcomePage');
});

Route::get('/welcomePage', function () {
    return view('welcomePage');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/sidebar', function () {
    return view('layouts/sidebar');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hobby', function () {
    return view('hobby');
});

Route::fallback(function(){
    return view('welcomePage');
});
