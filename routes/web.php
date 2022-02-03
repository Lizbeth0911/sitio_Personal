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
    return view('htmlliz.index');
})->name('index');

Route::get('/yo', function () {
    return view('htmlliz.generic');
})->name('generic');

Route::get('/gustos', function () {
    return view('htmlliz.generic1');
})->name('generic1');

Route::get('/actual', function () {
    return view('htmlliz.generic2');
})->name('generic2');
