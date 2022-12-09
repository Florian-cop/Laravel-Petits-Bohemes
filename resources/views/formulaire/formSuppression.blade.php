@extends('layouts.app')

@section('content')
<!-- Section-->
<section>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-6 row-cols-xl-6 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src={{ $articles->image }} alt="..." />
                        <div class="card-body p-2">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $articles->nom }}</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                {{ $articles->prix }} €
                            </div>
                        </div>
                        <div class="card-footer pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark" href="{{ route('article.show', ['id' =>$articles->id]) }}">Voir Article <br></a><br>
                                <a class="btn btn-outline-dark" href="{{ route('article.modification', ['id' =>$articles->id]) }}">Modi Article</a>
                                <a class="btn btn-outline-dark" href="{{ route('article.validation', ['id' =>$articles->id]) }}">Sup Article</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection