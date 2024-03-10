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
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');
Route::get('/comic', function (){
    $comics = config('comics');
    return view('comic', ['comics' => $comics[0]]);
})->name('comic');
Route::get('/games', function(){
    return view('games');
})->name('games');


