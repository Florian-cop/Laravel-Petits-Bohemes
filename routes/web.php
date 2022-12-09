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

Route::get('/admin/user', [ArticleController::class, 'userAll'])->name('admin.user');

Route::get('/inscription', [ArticleController::class, 'inscription'])->name('inscription');
Route::get('/connexion', [ArticleController::class, 'connexion'])->name('connexion');

Route::get('/contact', [ArticleController::class, 'contact'])->name('contact');
Route::post('/contact', [ArticleController::class, 'formulairecontact'])->name('formulairecontact');

Route::get('/article', [ArticleController::class, 'articleAll'])->name('article');
//Route::get('/admin/article', [ArticleController::class, 'articleAdminAll'])->name('admin.article');

Route::get('/admin', [ArticleController::class, 'admin'])->name('admin');
Route::get('/admin/article', [ArticleController::class, 'articleAll'])->name('admin.article');


Route::get('/admin/article/create', [ArticleController::class, 'articleCreate'])->name('admin.article.create');
Route::post('/admin/article/create', [ArticleController::class, 'articleStore'])->name('admin.article.store');

Route::get('/admin/article/update/{id}', [ArticleController::class, 'adminArticleModif'])->name('admin.article.modification');
Route::post('/admin/article/update/{id}', [ArticleController::class, 'adminArticleUpdate'])->name('admin.article.update');

Route::get('/admin/article/delete/{id}', [ArticleController::class, 'articleDelete'])->name('admin.article.delete');
Route::get('/admin/article/{id}', [ArticleController::class, 'articleShow'])->name('admin.article.show');
Route::get('/article/{id}', [ArticleController::class, 'articleShow'])->name('article.show');

Route::get('/new', [ArticleController::class, 'newProduits'])->name('new');
Route::get('/admin/new', [ArticleController::class, 'newProduits'])->name('admin.new');
Route::get('/new/{id}', [ArticleController::class, 'articleShow'])->name('new.show');

Route::get('/hauts', [ArticleController::class, 'hauts'])->name('hauts');
Route::get('/admin/hauts', [ArticleController::class, 'hauts'])->name('admin.hauts');
Route::get('/hauts/{id}', [ArticleController::class, 'articleShow'])->name('hauts.show');

Route::get('/bas', [ArticleController::class, 'bas'])->name('bas');
Route::get('/admin/bas', [ArticleController::class, 'bas'])->name('admin.bas');
Route::get('/bas/{id}', [ArticleController::class, 'articleShow'])->name('bas.show');

Route::get('/accessoires', [ArticleController::class, 'accessoires'])->name('accessoires');
Route::get('/admin/accessoires', [ArticleController::class, 'accessoires'])->name('admin.accessoires');
Route::get('/accessoires/{id}', [ArticleController::class, 'articleShow'])->name('accessoires.show');

Route::get('/ensemble', [ArticleController::class, 'ensemble'])->name('ensembles');
Route::get('/admin/ensemble', [ArticleController::class, 'ensemble'])->name('admin.ensembles');
Route::get('/ensemble/{id}', [ArticleController::class, 'articleShow'])->name('ensembles.show');

Route::get('/robes', [ArticleController::class, 'robes'])->name('robes');
Route::get('/admin/robes', [ArticleController::class, 'robes'])->name('admin.robes');
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
