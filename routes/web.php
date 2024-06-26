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

    $comicItems = config('db.comics');

    // dd($comicItems);

    return view('home', compact('comicItems'));

})->name('home');

Route::get('/product', function () {

    $SingleComicZero = config('db.comics.0');

    // dd($SingleComicZero);

    return view('product', compact('SingleComicZero'));

})->name('product');
