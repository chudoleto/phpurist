
@if (!Auth::guest())
	<li class="nav-item"><a href="{{ url('/') }}">Главная</a></li>
@endif