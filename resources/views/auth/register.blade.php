@extends('layouts.app.app_container') @section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6"><div class="card"><div class="card-body">
			<h4 class="card-title">Регистрация</h4>
			<form class="form-horizontal" method="POST" action="{{ route('register') }}">
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('Name') ? ' has-error' : '' }}">
					<label for="Name">Введите имя</label>
					<input id="Name" type="text" class="form-control" name="Name" value="{{ old('Name') }}" required>
					@if ($errors->has('Name'))
						<span class="help-block"><strong>{{ $errors->first('Name') }}</strong></span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
					<label for="login">Введите логин</label>
					<input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required>
					@if ($errors->has('login'))
						<span class="help-block"><strong>{{ $errors->first('login') }}</strong></span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<label for="password">Введите пароль</label>
					<input id="password" type="password" class="form-control" name="password" required>
					@if ($errors->has('password'))
						<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
					@endif
				</div>
				<div class="form-group">
					<label for="password-confirm">Подтвердите пароль</label>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Регистрация</button>
				</div>
			</form>
		</div></div></div>
	</div>
</div>
@endsection
