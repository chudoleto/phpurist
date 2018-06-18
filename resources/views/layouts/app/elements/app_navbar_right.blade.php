
@if (Auth::guest())
	<li class="nav-item"><a class="nav-link" href="{{ url('/appl') }}">Войти</a></li>
	<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Регистрация</a></li>
@else

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span>Добро пожаловать, {{ Auth::user()->getFullNameShort() }}</span>
		</a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="{{ url('/user/item/'.Auth::user()->id) }}">Профиль</a>
			<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				Выйти
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</div>
	</li>
		
		
	<li  class="nav-item nav-item-enter"></li>
	
@endif
