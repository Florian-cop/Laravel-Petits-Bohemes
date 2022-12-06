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
    return view('index');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/hauts', function () {
    return view('hauts');
});

Route::get('/bas', function () {
    return view('bas');
});

Route::get('/accessoires', function () {
    return view('accessoires');
});

Route::get('/ensembles', function () {
    return view('ensembles');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/robes', function () {
    return view('robes');
});