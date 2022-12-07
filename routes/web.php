<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/testarticle/{id}', [ArticleController::class, 'show'])-> whereNumber('id');
// Route::get('/', [ArticleController::class, 'inscription'])->name('inscription');
// Route::get('/', [ArticleController::class, 'connexion'])->name('connexion');
Route::get('/contact', [ArticleController::class, 'contact'])->name('contact');
Route::post('/contact', [ArticleController::class, 'formulairecontact'])->name('formulairecontact')->middleware('verified');

Route::get('/accessoires', [ArticleController::class, 'index.accessoires'])->name('accessoires');
Route::get('/bas', [ArticleController::class, 'bas'])->name('bas');
Route::get('/ensemble', [ArticleController::class, 'ensemble'])->name('ensemble');
Route::get('/hauts', [ArticleController::class, 'hauts'])->name('hauts');
Route::get('/new', [ArticleController::class, 'newProduits'])->name('new');
Route::get('/robes', [ArticleController::class, 'robes'])->name('robes');

//php artisan make:controller ArticleController

// Route::get('/new/{id}', function ($id) {
//     return view('produits.new');
// });

Route::prefix('admin')->group(function () {
    Route::get('mapage', function () {
        return redirect('/admin/mapage');
    }
    );
    Route::get('article', function () {
        return redirect('/admin/article');
    }
    );
    Route::get('test', function () {
        return 'Mon test';
    }
    );
});

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