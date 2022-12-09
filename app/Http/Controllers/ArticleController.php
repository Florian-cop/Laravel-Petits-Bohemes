<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {

        $articlesModification = Article::findOrFail(1);

        $articlesModification->update([
            'nom' => 'Nom modifier'
        ]);
        dd('édité');
        
        $articles= Article::all();

        return view('produits.article', [
            'articles'=> $articles
        ]);
    }
    public function userAll()
    {
        // $articles= Article::simplePaginate(12);
        //     // ->orderBy('created_at','desc');


        // return view('produits.article', [
        //     'articles'=> $articles
        // ]);
        $users= User::all();

        return view('user', [
            'users'=> $users
        ]);
    }

    public function admin()
    {
        return view('index');
    }
    public function articleAll()
    {
        $articles = Article::orderBy('nom', 'asc')->simplePaginate(12);
        return view('produits.articles', [
            'articles'=> $articles
        ]);
    }


    public function articleAdminAll()
    {
        $articles = Article::orderBy('nom', 'asc')->simplePaginate(12);
        return view('produits.articles', [
            'articles'=> $articles
        ]);
    }

    public function articleCreate()
    {
        return view('formulaire.formCreation');
    }

    public function articleStore (Request $request)
    {
        $articles = Article::all();
        if($request->prix > 0){
            $articles = Article::create([
                'nom' => $request->nom,
                'categorie' => $request->categorie,
                'prix' => $request->prix,
                'image' => $request->image,
            ]);
            return view('formulaire.formCreation', [
                'articles'=> $articles
            ]);
        }else {
            return view('formulaire.formCreation', [
                'articles'=> $articles
            ]);
        };
    }

    public function adminArticleModif($id)
    {
        $articles = Article::findOrfail($id);
        return view('formulaire.formModification', [
            'articles' => $articles,
            'id'=> $id
        ]);
    }

    public function adminArticleUpdate (Request $request,$id)
    {
        $articles = Article::findOrfail($id);
            
        if($request->nom != null){
            $articles->update([
                'nom' => $request->nom,
                'updated_at' => now()
            ]);
        }
        if($request->categorie != null){
            $articles->update([
                'categorie' => $request->categorie,
                'updated_at' => now()
            ]);
        }
        if($request->prix != null){
            $articles->update([
                'prix' => $request->prix,
                'updated_at' => now()
            ]);
        }
        if($request->image != null){
            $articles->update([
                'image' => $request->image,
                'updated_at' => now()
            ]);
        }
    
        return view('formulaire.formModification',[
            'articles' => $articles,
            'id'=> $id
        ]);
    }

    public function articleDelete($id)
    {
        
        $articles = Article::findOrfail($id);
        $articles->delete();
        return redirect('/article');
    }

    public function articleShow($id)
    {
        $articles = Article::findOrFail($id);
        return view('produits.article', [
            'article' => $articles,
            'id' => $id
        ]);

    }
    public function newProduits()
    {   
        $articles = Article::orderBy('created_at', 'desc')->simplePaginate(12);

        return view('produits.articles', [
            'articles'=> $articles
        ]);
    }
    public function accueil()
    {
        return view('index');
    }
    public function contact()
    {
        return view('contact');
    }
    public function formulairecontact()
    {
        return view('contact');   
    }

    public function inscription()
    {
        return view('authentification.inscription');   
    }
    
    public function connexion()
    {
        return view('authentification.connexion');   
    }


    public function accessoires()
    {
        $articles = Article::where('categorie','accessoires')->simplePaginate(12);
        return view('produits.articles', [
            'articles'=> $articles
        ]);
    }

    public function bas()
    {
        $articles = Article::where('categorie','bas')->simplePaginate(12);
        return view('produits.articles', [
            'articles'=> $articles
        ]);
    }
    public function ensemble()
    {
        $articles = Article::where('categorie','ensembles')->simplePaginate(12);
        return view('produits.articles', [
            'articles'=> $articles
        ]);
    }
    public function hauts()
    {
        $articles = Article::where('categorie','hauts')->simplePaginate(12);
        return view('produits.articles', [
            'articles'=> $articles
        ]);
    }
    public function robes()
    {
        $articles = Article::where('categorie','robes')->simplePaginate(12);
        return view('produits.articles', [
            'articles'=> $articles
        ]);
    }
}
