
@if (Auth::guest())
	<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Войти</a></li>
	<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Регистрация</a></li>
@else
	<li  class="nav-item nav-item-enter"><span>Добро пожаловать, {{ Auth::user()->getFullNameShort() }}</span></li>
	<li  class="nav-item">
		<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			Выйти
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
	</li>
@endif