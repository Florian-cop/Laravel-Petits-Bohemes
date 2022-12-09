@extends('layouts.app')

@section('content')
<!-- Section-->
<section>
    <div class="container px-2 px-lg-2 mt-7">
        <div class="row gx-4 gx-lg-2 row-cols-2 row-cols-md-4 row-cols-xl-2 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src={{ $article->image }} alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            
                            <h5 class="fw-bolder">{{ $article->nom }}</h5>
                            
                            {{ $article->prix }} €
                        </div>
                    </div>
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-outline-dark" href="{{ route('article.modification', ['id' =>$article->id]) }}">Modi Article</a>
                            <a class="btn btn-outline-dark" href="{{ route('article.delete', ['id' =>$article->id]) }}">Sup Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

