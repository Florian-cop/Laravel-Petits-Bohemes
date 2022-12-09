@extends('layouts.app')

@section('content')

<div class="container">
        <div class="text-center">
            @if(request('nom') == null && request('categorie') == null && request('prix') == null && request('categorie') == null)
                <h1 >Créer un nouvel article</h1>
            @elseif(request('prix') <= 0)
            <h1 >Saisir une valeur possitif</h1>
            @else
            <div class="">
                <h1>Article Créer </h1>
                <h3>Nom de l'article :  {{$articles->nom}}</h3>
            </div>
            @endif
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <div class = "container">
                    <form method="POST" action="/admin/article/create">
                        {{ csrf_field() }}
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom *</label>
                                        <input type="text" name="nom" class="form-control" placeholder="Nom de l'article *" required="required" data-error="Le nom est obligatoire.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image*</label>
                                        <input type="text" name="image" class="form-control" placeholder="Url pour l'image de l'article *" required="required" data-error="L'url de l'image est obligatoire.">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Prix *</label>
                                        <input  type="number" name="prix" class="form-control" placeholder="Prix de l'article *" required data-error="Le prix est obligatoire.">
                                        
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Categorie *</label>
                                    <select name="categorie" class="form-control" required="required" data-error="Selectionner une catégorrie." required="required" data-error="La catégorrie est obligatoire.">
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
                                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Créer le produit" >
                                </div>
                            </div>
                            
                            </div>
                    </form>
                </div>
            </div>
        </div>
        @if(request('nom') != null && request('categorie') != null && request('prix') != null && request('image') != null) 
        <div class="col-md-12">
            <a class="btn btn-success pt-2 justify-content" href="{{ route('accueil') }}">Accueil</a>
        </div>
    @endif
    </div>
</div>

</div>

@endsection