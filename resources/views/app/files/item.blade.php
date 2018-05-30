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
	
	<h1>Файлы</h1>
	
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" id="id" value="{{ ($item) ? $item->id : '' }}">
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Файл</label>
					<input name="File_link" id="File_link" value="{{ old('File_link', null) ? old('File_link') : $item->File_link }}" type="text" class="form-control">
				</div>
			</div>
	
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Задача</label>
					<select name="Task_id" id="Task_id" class="custom-select">
						{!! App\Task::getSelectFieldOptions($item->Task, old('Task_id', null)) !!}
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