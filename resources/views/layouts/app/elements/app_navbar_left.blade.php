
@if (!Auth::guest())

@endif

<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Настройки
	</a>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="{{ url('/priority_task') }}">Приоритеты задач</a>
		<a class="dropdown-item" href="{{ url('/status_project') }}">Статусы проектов</a>
		<a class="dropdown-item" href="{{ url('/status_task') }}">Статусы задач</a>
		<a class="dropdown-item" href="{{ url('/role') }}">Роли</a>
		<a class="dropdown-item" href="{{ url('files') }}">Файлы</a>
	</div>
</li>

<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Администрирование
	</a>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="{{ url('/servise') }}">Сервисы</a>
		<a class="dropdown-item" href="{{ url('/subdvision') }}">Подразделения</a>
		<a class="dropdown-item" href="{{ url('/users_') }}">Пользователи</a>
	</div>
</li>

<li class="nav-item"><a class="nav-link" href="{{ url('/project') }}">Проекты</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/task') }}">Задачи</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/card') }}">карточка</a></li>