@if (!Auth::guest())

	@if (Auth::user()->Role->id == 1)
	
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Настройки
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="{{ url('/priority_task') }}">Приоритеты задач</a>
				<a class="dropdown-item" href="{{ url('/status_project') }}">Статусы проектов</a>
				<a class="dropdown-item" href="{{ url('/status_task') }}">Статусы задач</a>
				<a class="dropdown-item" href="{{ url('/role') }}">Роли</a>
			</div>
		</li>
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Администрирование
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="{{ url('/servise') }}">Сервисы</a>
				<a class="dropdown-item" href="{{ url('/subdvision') }}">Подразделения</a>
				<a class="dropdown-item" href="{{ url('/user') }}">Пользователи</a>
			</div>
		</li>
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Данные
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="{{ url('/project') }}">Проекты</a>
				<a class="dropdown-item" href="{{ url('/task') }}">Задачи</a>
				<a class="dropdown-item" href="{{ url('/card') }}">Карточка</a>
				<a class="dropdown-item" href="{{ url('files') }}">Файлы</a>
			</div>
		</li>
	@endif
		
	@if (Auth::user()->Role->id == 2)
		<li class="nav-item"><a class="nav-link" href="{{ url('/subdvision/item/' . Auth::user()->Subdvision->id) }}">Подразделение</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ url('/user') }}">Пользователи</a></li>
	@endif
	
	@if (Auth::user()->Role->id == 2 || Auth::user()->Role->id == 3)
		<li class="nav-item"><a class="nav-link" href="{{ url('/project') }}">Проекты</a></li>
	@endif
	
	
	@if (Auth::user()->Role->id == 2 || Auth::user()->Role->id == 3 || Auth::user()->Role->id == 4)
		<li class="nav-item"><a class="nav-link" href="{{ url('/task') }}">Задачи</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ url('/card') }}">Карточка</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ url('files') }}">Файлы</a></li>
	@endif
	


@endif