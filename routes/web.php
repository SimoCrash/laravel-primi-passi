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
    return view('Entra Nel Sito');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Chi Siamo', function () {
    return view('Chi Siamo');
});

Route::get('/Contatti', function () {
    return view('contatti');
});

Route::get('/Lavora Con Noi', function () {
    return view('Lavora Con Noi');
});


