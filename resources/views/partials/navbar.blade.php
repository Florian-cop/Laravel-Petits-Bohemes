<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container px-4 px-lg-5">
		<a class="navbar-brand" href="{{ route('accueil') }}">Les Petites Bohèmes</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
				@if(Auth::user() && Auth::user()->admin == 1)
				<li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Admin</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('admin.new') }}">Nouveauté (Admin)</a></li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Article</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('admin.article') }}">Afficher tout les articles</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.user') }}">Afficher tout les utilisateurs</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.article.create') }}">Créer un nouvel article</a></li>
					</ul>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="{{ route('admin.hauts') }}">Hauts (admin)</a></li>
							<li><a class="dropdown-item" href="{{ route('admin.bas') }}">Bas  (admin)</a></li>
							<li><a class="dropdown-item" href="{{ route('admin.robes') }}">Robes  (admin)</a></li>
							<li><a class="dropdown-item" href="{{ route('admin.ensembles') }}">Ensembles  (admin)</a></li>
							<li><a class="dropdown-item" href="{{ route('admin.accessoires') }}">Accessoires  (admin)</a></li>
						</ul>
					</li>
				@else
				<li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('accueil') }}">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('new') }}">Nouveauté</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('article') }}">Afficher tout les articles</a></li>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('hauts') }}">Hauts</a></li>
						<li><a class="dropdown-item" href="{{ route('bas') }}">Bas</a></li>
						<li><a class="dropdown-item" href="{{ route('robes') }}">Robes</a></li>
						<li><a class="dropdown-item" href="{{ route('ensembles') }}">Ensembles</a></li>
						<li><a class="dropdown-item" href="{{ route('accessoires') }}">Accessoires</a></li>
					</ul>
				</li>
				@endif
			</ul>
			<ul class="navbar-nav ms-auto">
				<!-- Authentication Links -->
				@guest
					@if (Route::has('login'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
					@endif

					@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
					@endif
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }}
						</a>

						<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
						</div>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>