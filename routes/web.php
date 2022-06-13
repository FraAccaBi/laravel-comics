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
    $links = config('db.links');
    $cards = config('db.cards');
    return view('home', compact('comics', 'navbar', 'links', 'cards'));
})->name('home');

Route::get('/characters', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('characters', compact('navbar', 'links', 'cards'));
})->name('characters');
Route::get('/comics', function () {
    $name = Route::currentRouteName();
    $comics = config('db.comics');
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('comics', compact('navbar', 'comics', 'cards', 'links'));
})->name('comics');

Route::get('/movies', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('movies', compact('navbar', 'links', 'cards'));
})->name('movies');
Route::get('/tv', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('tv', compact('navbar', 'links', 'cards'));
})->name('tv');
Route::get('/games', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('games', compact('navbar', 'links', 'cards'));
})->name('games');
Route::get('/collectibles', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('collectibles', compact('navbar', 'links', 'cards'));
})->name('collectibles');
Route::get('/video', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('video', compact('navbar', 'links', 'cards'));
})->name('video');
Route::get('/fan', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('fan', compact('navbar', 'links', 'cards'));
})->name('fan');
Route::get('/news', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('news', compact('navbar', 'links', 'cards'));
})->name('news');
Route::get('/shop', function () {
    $name = Route::currentRouteName();
    $navbar = config('db.navbar');
    $links = config('db.links');
    $cards = config('db.cards');
    return view('shop', compact('navbar', 'links', 'cards'));
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
    $links = config('db.links');
    $cards = config('db.cards');

    return view('comic', compact('navbar', 'comic', 'links', 'cards'));
})->name('comic');


