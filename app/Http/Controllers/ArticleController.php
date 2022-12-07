<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        // function contact()
        // {
        //     return view('contact');
        // }
        function accessoires()
        {
            return view('produits.accessoires');
        }
        // function formulairecontact()
        // {
        //     return view('contact');   
        // }
        // function bas()
        // {
        //     return view('produits.bas');
        // }
        // function ensemble()
        // {
        //     return view('produits.ensemble');
        // }
        // function hauts()
        // {
        //     return view('produits.hauts');
        // }
        // function newProduits()
        // {
        //     return view('produits.new');
        // }
        // function robes()
        // {
        //     return view('produits.robes');
        // }
        // $posts = [
        //     'Mon super premier titre',
        //     'Mon super deux titre'
        // ];
        // // $title = 'Mon super premier titre';
        // // $title2 = 'Mon super deux titre';

        // // return view('index', compact('title'));
        // // return view('index')->with('title', $title);
        // // return view('index', compact('title','title2 '));
        // // return view('index', [
        // //     'title' => $title,
        // //     'title2' => $title2
        // // ]);
        // // return view('index', compact('posts'));
        // return view('index',[
        //     'posts' => $posts
        // ]);
    }

    public function show($id)
    {
        
        return view('testarticle', [
            'id' => $id
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    // public function accessoires()
    // {
    //     return view('produits.accessoires');
    // }
    public function formulairecontact()
    {
        return view('contact');   
    }
    public function bas()
    {
        return view('produits.bas');
    }
    public function ensemble()
    {
        return view('produits.ensemble');
    }
    public function hauts()
    {
        return view('produits.hauts');
    }
    public function new()
    {
        return view('produits.new');
    }
    public function robes()
    {
        return view('produits.robes');
    }



}
