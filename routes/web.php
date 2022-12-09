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

Route::get('/', [ArticleController::class, 'accueil'])->name('accueil');

Route::get('/user', [ArticleController::class, 'userAll'])->name('user');

Route::get('/inscription', [ArticleController::class, 'inscription'])->name('inscription');
Route::get('/connexion', [ArticleController::class, 'connexion'])->name('connexion');

Route::get('/contact', [ArticleController::class, 'contact'])->name('contact');
Route::post('/contact', [ArticleController::class, 'formulairecontact'])->name('formulairecontact');

Route::get('/article', [ArticleController::class, 'articleAll'])->name('article');
Route::get('/article/create', [ArticleController::class, 'articleCreate'])->name('article.create');
Route::post('/article/create', [ArticleController::class, 'articleStore'])->name('article.store');
Route::get('/article/update/{id}', [ArticleController::class, 'articleModif'])->name('article.modification');
Route::post('/article/update/{id}', [ArticleController::class, 'articleUpdate'])->name('article.update');
Route::get('/article/delete/{id}', [ArticleController::class, 'articleDelete'])->name('article.delete');
Route::get('/article/{id}', [ArticleController::class, 'articleShow'])->name('article.show');

Route::get('/new', [ArticleController::class, 'newProduits'])->name('new');
Route::get('/new/{id}', [ArticleController::class, 'articleShow'])->name('new.show');

Route::get('/hauts', [ArticleController::class, 'hauts'])->name('hauts');
Route::get('/hauts/{id}', [ArticleController::class, 'articleShow'])->name('hauts.show');

Route::get('/bas', [ArticleController::class, 'bas'])->name('bas');
Route::get('/bas/{id}', [ArticleController::class, 'articleShow'])->name('bas.show');

Route::get('/accessoires', [ArticleController::class, 'accessoires'])->name('accessoires');
Route::get('/accessoires/{id}', [ArticleController::class, 'articleShow'])->name('accessoires.show');

Route::get('/ensemble', [ArticleController::class, 'ensemble'])->name('ensembles');
Route::get('/ensemble/{id}', [ArticleController::class, 'articleShow'])->name('ensembles.show');

Route::get('/robes', [ArticleController::class, 'robes'])->name('robes');
Route::get('/robes/{id}', [ArticleController::class, 'articleShow'])->name('robes.show');

//php artisan make:controller ArticleController

// Route::get('/new/{id}', function ($id) {
//     return view('produits.new');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('mapage', function () {
//         return redirect('/admin/mapage');
//     }
//     );
//     Route::get('article', function () {
//         return redirect('/admin/article');
//     }
//     );
//     Route::get('test', function () {
//         return 'Mon test';
//     }
//     );
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
('signin');
