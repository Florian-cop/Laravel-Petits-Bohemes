<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = [
            'Mon super premier titre',
            'Mon super deux titre'
        ];
        // $title = 'Mon super premier titre';
        // $title2 = 'Mon super deux titre';

        // return view('index', compact('title'));
        // return view('index')->with('title', $title);
        // return view('index', compact('title','title2 '));
        // return view('index', [
        //     'title' => $title,
        //     'title2' => $title2
        // ]);
        // return view('index', compact('posts'));
        return view('index',[
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $posts = [
            1 => 'Mon numéro 1',
            2 => 'Mon numéro 2'
        ];
        $post = $posts[$id] ?? 'pas de titre';
        
        return view('testarticle', [
            'post' => $post
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function accessoires()
    {
        return view('produits.accessoires');
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
