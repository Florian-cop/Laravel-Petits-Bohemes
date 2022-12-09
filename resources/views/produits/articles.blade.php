@extends('layouts.app')

@section('content')
<!-- Section-->
<section>
    <div class="container px-2 px-lg-2 mt-7">
        <div class="row gx-4 gx-lg-2 row-cols-2 row-cols-md-4 row-cols-xl-2 justify-content-center">
            @foreach($articles as $article)
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src={{ $article->image }} alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            
                            <h5 class="fw-bolder">{{ $article->nom }}</h5>
                            {{ $article->prix }} €
                            @if(strpos(url()->full(),'new') !== false)
                            <br>{{ $article->created_at }}
                            @elseif(strpos(url()->full(),'hauts') !== false || strpos(url()->full(),'bas') !== false || strpos(url()->full(),'robes') !== false || strpos(url()->full(),'accessoires') !== false || strpos(url()->full(),'ensemble') !== false) 
                            <br>{{ $article->categorie }}
                            @endif
                        </div>
                    </div>
                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            @if(Auth::user() && Auth::user()->admin == 1 && strpos(url()->full(),'admin'))
                            <a class="btn btn-outline-dark" href="{{ route('admin.article.show', ['id' =>$article->id]) }}">Voir Article<br></a><br>
                            <a class="btn btn-outline-dark" href="{{ route('admin.article.modification', ['id' =>$article->id]) }}">Modif Article</a>
                            <a class="btn btn-outline-dark" href="{{ route('admin.article.delete', ['id' =>$article->id]) }}">Sup Article</a>
                            @else
                            <a class="btn btn-outline-dark" href="{{ route('article.show', ['id' =>$article->id]) }}">Voir Article <br></a><br>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    {{ $articles->links('pagination.pagination') }}
</div>
</section>
@endsection

