<div class="home">
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="/">Les Petites Bohèmes</a>
			</div>  
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li ><a href="/">Home</a></li>
					<li><a href="{{ route('new') }}">Nouveauté</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produit<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('hauts') }}">Hauts</a></li>
                            <li><a href="{{ route('bas') }}">Bas</a></li>
                            <li><a href="{{ route('robes') }}">Robes</a></li>
                            <li><a href="{{ route('ensemble') }}">Ensembles</a></li>
                            <li><a href="{{ route('accessoires') }}">Accessoires</a></li>
						</ul>
					</li>
					<li><a href="{{ route('contact') }}">Contact</a></li>
					<li><a class="btn" href="/signin">SIGN IN / SIGN UP</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>