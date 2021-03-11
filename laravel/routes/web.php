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

    // $pastaLunga = array_filter($pasta, function($k) {
    // return $k['tipo'] == 'lunga';
    // });

    // $pastaCorta = array_filter($pasta, function($k) {
    // return $k['tipo'] == 'corta';
    // });

    // $pastaCortissima = array_filter($pasta, function($k) {
    // return $k['tipo'] == 'cortissima';
    // });

    
    $collection = collect($pasta);
    
    $pastaLunga = $collection->where('tipo', 'lunga');
    $pastaCorta = $collection->where('tipo', 'corta');
    $pastaCortissima = $collection->where('tipo', 'cortissima');
    
    $data = [
        'formati' => [
            'lunga' => $pastaLunga,
            'corta' => $pastaCorta,
            'cortissima' => $pastaCortissima
        ]
    ];

    return view('product', $data);
})->name('prodotti');

Route::get('/novita', function () {
    return view('news');
})->name('novita');
    
Route::get('/specifica-prodotto/{id}', function ($id) {
    $pasta = config('ciao');

    if ($id < count($pasta) && $id >= 0 && is_numeric($id)) {
        $selezione = $pasta[$id];
    
        $data = [
            'nomeAssociativo' => $selezione
        ];
    
        
        return view('specific-product', $data);
        
    } else {
        
        abort('404');
    }

})->name('specifica-prodotto');

    

