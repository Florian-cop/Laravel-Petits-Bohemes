<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/testarticle/{id}', [PostController::class, 'show'])-> whereNumber('id'); 
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
Route::get('/accessoires', [PostController::class, 'accessoires'])->name('accessoires');
Route::get('/bas', [PostController::class, 'bas'])->name('bas');
Route::get('/ensemble', [PostController::class, 'ensemble'])->name('ensemble');
Route::get('/hauts', [PostController::class, 'hauts'])->name('hauts');
Route::get('/new', [PostController::class, 'new'])->name('new');
Route::get('/robes', [PostController::class, 'robes'])->name('robes');

//php artisan make:controller PostController

// Route::get('/new', function () {
//     return view('new');
// });

// Route::get('/hauts', function () {
//     return view('produits.hauts');
// });

// Route::get('/bas', function () {
//     return view('bas');
// });

// Route::get('/accessoires', function () {
//     return view('produits.accessoires')->name('contact');;
// });

// Route::get('/ensembles', function () {
//     return view('ensembles');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/signin', function () {
//     return view('signin');
// });

// Route::get('/robes', function () {
//     return view('robes');
// });