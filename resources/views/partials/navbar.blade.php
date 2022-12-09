
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container px-4 px-lg-5">
		<a class="navbar-brand" href="{{ route('accueil') }}">Les Petites Bohèmes</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
				<li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('accueil') }}">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('new') }}">Nouveauté</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Article</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('article') }}">Afficher tout les articles</a></li>
						<li><a class="dropdown-item" href="{{ route('user') }}">Afficher tout les utilisateurs</a></li>
						<li><a class="dropdown-item" href="{{ route('article.create') }}">Créer un nouvel article</a></li>
					</ul>
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
			</ul>
				<button class="btn btn-outline-dark" type="submit">
					<a class="btn" href="{{route ('connexion') }}">CONNEXION/ INSCRIPTION</a>
				</button>
		</div>
	</div>
</nav>