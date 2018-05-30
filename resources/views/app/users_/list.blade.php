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
	
	<h1>Пользователи</h1>
	
	<form method="post">
		{{ csrf_field() }}
		
		<div class="row py-2">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-default" name="btn_create" value="1"><i class="fas fa-plus-circle"></i> Создать</button>
			</div>
		</div>
		
		<div class="row py-2 d-none d-sm-flex">
			<div class="col-sm-1 font-weight-bold">Логин</div>
			<div class="col-sm-1 font-weight-bold">Пароль</div>
			<div class="col-sm-2 font-weight-bold">Email</div>
			<div class="col-sm-1 font-weight-bold">Имя</div>
			<div class="col-sm-1 font-weight-bold">Фамилия</div>
			<div class="col-sm-2 font-weight-bold">Отчество</div>
			<div class="col-sm-1 font-weight-bold">Пол</div>
			<div class="col-sm-1 font-weight-bold">Роль</div>
			<div class="col-sm-1 font-weight-bold">Подразделение</div>
		</div>
		
		@foreach($list as $item)
		<div class="row py-2 border-top">
		
			<div class="col-sm-1"> {{ $item->Login }} </div>
			<div class="col-sm-1"> {{ $item->Password }} </div>
			<div class="col-sm-2"> {{ $item->Email }} </div>
			<div class="col-sm-1"> {{ $item->Name }} </div>
			<div class="col-sm-1"> {{ $item->Sename }} </div>
			<div class="col-sm-2"> {{ $item->Otchestvo }} </div>
			<div class="col-sm-1"> {{ $item->Pol }} </div>
			<div class="col-sm-1"> {{ ($item->Role) ? $item->Role->name : '' }} </div>
			<div class="col-sm-1"> {{ ($item->Subdvision) ? $item->Subdvision->Name : '' }} </div>
			<div class="col-sm-2 text-center">
				<button type="submit" class="btn btn-default" name="btn_edit" value="{{ $item->id }}" title="Редактировать"><i class="fas fa-edit"></i></button>
				<button type="submit" class="btn btn-default" name="btn_delete" value="{{ $item->id }}" title="Удалить"><i class="fas fa-trash-alt"></i></button>
			</div>
			
		</div>
		@endforeach
	</form>
	
@endsection

@section('code')
@endsection