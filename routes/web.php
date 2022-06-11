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
    $comics = config('db.comics');
    $navbar = config('db.navbar');
    return view('home', compact('comics', 'navbar'));
})->name('home');

Route::get('/characters', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('characters', compact('navbar'));
})->name('characters');
Route::get('/comics', function () {
    $name = Route::currentRouteName();
    $comics = config('db.comics');
    $navbar = config('db.navbar');
    return view('comics', compact('navbar', 'comics'));
})->name('comics');

Route::get('/movies', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('movies', compact('navbar'));
})->name('movies');
Route::get('/tv', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('tv', compact('navbar'));
})->name('tv');
Route::get('/games', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('games', compact('navbar'));
})->name('games');
Route::get('/collectibles', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('collectibles', compact('navbar'));
})->name('collectibles');
Route::get('/video', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('video', compact('navbar'));
})->name('video');
Route::get('/fan', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('fan', compact('navbar'));
})->name('fan');
Route::get('/news', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('news', compact('navbar'));
})->name('news');
Route::get('/shop', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('shop', compact('navbar'));
})->name('shop');
Route::get('/comics/{title}/', function ($title) {
    $comics = config('db.comics');
    $comic = null;
    foreach($comics as $dbComic){        
        if($dbComic['title'] == urldecode($title)){
            $comic = $dbComic;
            break;
        }
    }
    if($comic == null){
        abort(404);
    }
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    return view('comic', compact('navbar', 'comic'));
})->name('comic');


