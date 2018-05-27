
@if (!Auth::guest())

@endif

<li class="nav-item"><a class="nav-link" href="{{ url('/role') }}">Роли</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/subdvision') }}">Подразделение</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('servise') }}">Сервис</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/priority_task') }}">Приоритет задачи</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/status_project') }}">Статус проекта</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/status_task') }}">Статус Задачи</a></li>