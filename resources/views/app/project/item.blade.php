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
	
	<h1>Проект</h1>
	
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" id="id" value="{{ ($item) ? $item->id : '' }}">
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Наименование</label>
					<input name="Name" id="Name" value="{{ old('Name', null) ? old('Name') : $item->Name }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Крайний срок</label>
					<input name="Deadline" id="Deadline" value="{{ old('Deadline', null) ? old('Deadline') : date('Y-m-d', strtotime($item->Deadline)) }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Комментарий</label>
					<textarea name="Comment" id="Comment" class="form-control">{{ old('Comment', null) ? old('Comment') : $item->Comment }}</textarea>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Статус</label>
					<select name="Status_project_id" id="Status_project_id" class="custom-select">
						{!! App\Status_project::getSelectFieldOptions($item->Status_project, old('Status_project_id', null)) !!}
					</select>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Ответственный</label>
					<select name="User_id" id="User_id" class="custom-select">
						{!! App\User::getSelectFieldOptions($item->User, old('User_id', null), true) !!}
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