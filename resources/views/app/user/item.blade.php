@extends('layouts.app.app_container')

@section('content')

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	<h1>Пользователь</h1>
	
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" id="id" value="{{ ($item) ? $item->id : '' }}">
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Логин</label>
					<input name="login" id="Login" value="{{ old('login', null) ? old('login') : $item->login }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Пароль</label>
					<input name="password" id="password" value="{{ old('password', null) ? old('password') : (($item->password) ? '******' : '') }}" type="password" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Email</label>
					<input name="Email" id="Email" value="{{ old('Email', null) ? old('Email') : $item->Email }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Имя</label>
				<input name="Name" id="Name" value="{{ old('Name', null) ? old('Name') : $item->Name }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Фамилия</label>
			<input name="Sename" id="Sename" value="{{ old('Sename', null) ? old('Sename') : $item->Sename }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Отчество</label>
				<input name="Otchestvo" id="Otchestvo" value="{{ old('Otchestvo', null) ? old('Otchestvo') : $item->Otchestvo }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Пол</label><br>
	                <div class="form-check-inline">
	                	<input class="form-check-input" type="radio" name="Pol" id="Pol1" value="male" {{ ($item->Pol == 'female') ? '' : 'checked' }}>
	                	<label class="form-check-label" for="Pol1">М</label>
	                </div>
	                <div class="form-check-inline">
	                  <input class="form-check-input" type="radio" name="Pol" id="Pol2" value="female" {{ ($item->Pol == 'female') ? 'checked' : '' }}>
	                  <label class="form-check-label" for="Pol2">Ж</label>
	                </div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Роль</label>
					<select name="Role_id" id="Role_id" class="custom-select">
						{!! App\Role::getSelectFieldOptions($item->Role, old('Role_id', null)) !!}
					</select>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Подразделение</label>
					<select name="Subdvision_id" id="Subdvision_id" class="custom-select">
						{!! App\Subdvision::getSelectFieldOptions($item->Subdvision, old('Subdvision_id', null)) !!}
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-primary" name="btn_ok" value="1">Ок</button>
				<button type="submit" class="btn btn-default" name="btn_save" value="1">Сохранить</button>
				<button type="submit" class="btn btn-default" name="btn_cancel" value="1">Отмена</button>
			</div>
		</div>
	</form>
	
@endsection

@section('code')
@endsection