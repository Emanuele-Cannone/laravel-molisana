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
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
    $pasta = config('ciao');
    $data = ['formati' => config('ciao')];
    return view('product', $data);
})->name('prodotti');

Route::get('/novita', function () {
    return view('news');
})->name('novita');
    
Route::get('/specifica-prodotto/{id}', function ($id) {
    $pasta = config('ciao');

    $selezione = $pasta[$id];
    
    $data = [
        'nomeAssociativo' => $selezione
    ];


    return view('specific-product', $data);
})->name('specifica-prodotto');
    

