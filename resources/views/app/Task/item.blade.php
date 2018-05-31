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
	
	<h1>Задача</h1>
	
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" id="id" value="{{ ($item) ? $item->id : '' }}">
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Заголовок</label>
					<input name="Header" id="Header" value="{{ old('Header', null) ? old('Header') : $item->Header }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Описание</label>
					<textarea name="Description" id="Description" class="form-control">{{ old('Description', null) ? old('Description') : $item->Description }}</textarea>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Крайний срок</label>
					<input name="Short_deadline" id="Short_deadline" value="{{ old('Short_deadline', null) ? old('Short_deadline') : $item->Short_deadline }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Начало</label>
					<input name="Start" id="Start" value="{{ old('Start', null) ? old('Start') : $item->Start }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Конец </label>
					<input name="End" id="End" value="{{ old('End', null) ? old('End') : $item->End}}" type="text" class="form-control">
				</div>
			</div>
				<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Статус</label>
					<input name="Status" id="Status" value="{{ old('Status', null) ? old('Status') : $item->Status }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Проект</label>
					<select name="Project_id" id="Project_id" class="custom-select">
						{!! App\Project::getSelectFieldOptions($item->Project, old('Project_id', null)) !!}
					</select>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Приоритет задачи</label>
					<select name="Priority_task_id" id="Priority_task_id" class="custom-select">
						{!! App\Priority_task::getSelectFieldOptions($item->Priority_task, old('Priority_task_id', null)) !!}
					</select>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Статус задачи</label>
					<select name="Status_task_id" id="Status_task_id" class="custom-select">
						{!! App\Status_task::getSelectFieldOptions($item->Status_task, old('Status_task_id', null)) !!}
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