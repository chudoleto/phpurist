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
	
	<h1>Подразделение</h1>
	
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" id="id" value="{{ ($item) ? $item->id : '' }}">
		
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="name">Название подразделения</label>
					<input name="name" id="name" value="{{ old('name', null) ? old('name') : $item->name }}" type="text" class="form-control">
				</div>
			</div>
				<div class="col-sm-12">
				<div class="form-group">
					<label for="name">Описание</label>
					<input name="Description" id="Description" value="{{ old('Description', null) ? old('Description') : $item->Description }}" type="text" class="form-control">
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