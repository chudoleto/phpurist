
@if (Auth::guest())
	<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Войти</a></li>
	<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Регистрация</a></li>
@else
	<li  class="nav-item">
		<a class="nav-link" href="{{ url('/') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			Выйти
		</a>
		<form id="logout-form" action="{{ url('/') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
	</li>
@endif