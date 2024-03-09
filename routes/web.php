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
    $links = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];
    $comics = config('comics');
    return view('layouts.home',  compact('links'), compact('comics'));
});
Route::get('/comic', function (){
    // ricorda di dinamicizzare l'index
    $comics = config('comics');
    return view('comic', ['comics' => $comics[0]]);
})->name('comic');



