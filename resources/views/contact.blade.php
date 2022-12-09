@extends('layouts.app')

@section('content')
	<div class="container">

			<article class="col-sm-9">

				<header class="">
					<h1 class="page-title text-dark">Contact us</h1>
				</header>

				<p class="text-dark">
					We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
				</p>

				@if(request('email') != null && request('nom') != null && request('message') != null)
						<h1>Votre message a bien été recu par notre équipe, merci de votre confiance</h1>
				@else
					<form action="/contact" method=post>
						{{ csrf_field() }}
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Nom" name="nom" required>
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Email" name="email" required>
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Phone">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Type your message here..." class="form-control" rows="9" name="message" required></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							{{-- <div class="col-sm-6">
								<input type="checkbox"> S'inscrire à la Newsletter
							</div> --}}
							<div class="">
								<input class="btn btn-action" type="submit" value="Send message">
							</div>
						</div>
					</form>
				@endif
			</article>
		</div>
	</div>
@endsection