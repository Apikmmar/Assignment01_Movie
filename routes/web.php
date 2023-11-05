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

Route::get('/', function () {
    return view('home');
});

Route::get('/christophernolan', function() {
    return view('biodata');
});

Route::get('/prestige/detail', function() {
    return view('movies/movie1');
});

Route::get('/inception/detail', function() {
    return view('movies/movie2');
});

Route::get('/interstellar/detail', function() {
    return view('movies/movie3');
});