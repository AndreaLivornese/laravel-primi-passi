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

    $word = "Hello World!";

    return view('Home', compact("word"));
});


Route::get('/Pagina-1', function () {

    $word = "Pagina 1";

    return view('Pagina1', compact("word"));
})->name=('Pagina 1');


Route::get('/Pagina-2', function () {

    $word = "Pagina 2";

    return view('Pagina2', compact("word"));
})->name('Pagina 2');

Route::get('/Pagina-3', function () {

    $word = "Pagina 3";

    return view('Pagina3', compact("word"));
})->name('Pagina 3');
