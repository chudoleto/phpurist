@extends('layouts.app.app_container') @section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Авторизация</h4>
					<form class="form-horizontal" method="POST"
						action="{{ route('login') }}">
						{{ csrf_field() }}

						<div
							class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="login">Введите логин</label> <input id="login"
								type="text" class="form-control" name="login"
								value="{{ old('login') }}" required autofocus>
							@if($errors->has('login')) <span class="help-block"> <strong>{{
									$errors->first('login') }}</strong>
							</span> @endif

						</div>

						<div
							class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password">Введите пароль</label> <input id="password"
								type="password" class="form-control" name="password" required>
							@if ($errors->has('password')) <span class="help-block"> <strong>{{
									$errors->first('password') }}</strong>
							</span> @endif

						</div>

						<div class="form-group">
								<div class="checkbox">
									<label> <input type="checkbox" name="remember"{{ old('remember') ? 'checked' : '' }}>
										Запомнить меня
									</label>
								</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Войти</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
