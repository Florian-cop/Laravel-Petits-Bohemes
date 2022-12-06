@extends('layouts.app')

@section('content')
		<div class="row">
			<h1 class="lead">SITE DE VENTE DE VETEMENTS FEMININS</h1>
			<h3 class="tagline">Entreprise dédiée à la vente de vetemens feminins depuis 1812</p>
			<h4 class="tagline">Considérer comme la meilleure depuis longtemps, vous trouvez forcément votre bonheur</p>
			<h4 class="tagline">Trouvez votre style, et mettez vous en avant</p>
		</div>
		
	@forEach($posts as $post)
		<h3> {{ $post }}</h3>
	@endforeach

@endsection