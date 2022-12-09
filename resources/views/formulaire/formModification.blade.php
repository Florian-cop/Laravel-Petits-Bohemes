@extends('layouts.app')

@section('content')

<div class="container">
    <div class="text-center">
        @if(request('nom') == null && request('categorie') == null && request('prix') == null && request('categorie') == null)
            <h1 >Modifier l'article : {{$articles->nom}}</h1>
        @else
        <div class="">
            <h1>Article Modifier </h1>
            <h3>Nouveau nom :  {{$articles->nom}}</h3>
        </div>
        @endif
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <div class = "container">
                    <form method="POST" action="/article/update/{{$id}}">
                        {{ csrf_field() }}
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="nom" class="form-control" placeholder="Nouveau nom de l'article">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="text" name="image" class="form-control" placeholder="Nouvelle Url pour l'image de l'article" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Prix</label>
                                        <input  type="number" name="prix" class="form-control" placeholder="Nouveau prix de l'article">
                                        
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Categorie</label>
                                    <select name="categorie" class="form-control">
                                        <option value="" selected disabled>--Selectionner une categorie--</option>
                                        <option >hauts</option>
                                        <option >bas</option>
                                        <option >robes</option>
                                        <option >accessoires</option>
                                        <option >ensemble</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Modifier l'article" >
                                </div>

                            </div>
                            </div>
                    </form>
                </div>
                
            </div>
        </div>
        @if(request('nom') != null || request('categorie') != null || request('prix') != null || request('image') != null) 
            <div class="col-md-12">
                <a class="btn btn-success pt-2 justify-content" href="{{ route('accueil') }}">Accueil</a>
            </div>
        @endif
    </div>
</div>

</div>

@endsection