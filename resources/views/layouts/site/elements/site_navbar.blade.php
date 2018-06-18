<div class="container"><div class="row justify-content-center">
	<div class="col-sm-4 text-center">
		<h1>{{ config('app.name', 'Laravel') }}</h1>
	</div>
</div></div>

<div class="app mainmenu">
	<nav class="navbar navbar-expand-md navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-md-center container" id="app-navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Главная</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Контакты</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ url('/news') }}">Новости</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ url('/appl') }}">Вход</a></li>
			</ul>
		</div>
	</nav>
</div>