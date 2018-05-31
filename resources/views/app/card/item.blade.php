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
					<label for="name">Ответчик</label>
					<input name="Otvetchik" id="Otvetchik" value="{{ old('Otvetchik', null) ? old('Otvetchik') : $item->Otvetchik }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Истец</label>
					<input name="Istec" id="Istec" value="{{ old('Istec', null) ? old('Istec') : $item->Istec }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">RIP</label>
					<input name="RIP" id="RIP" value="{{ old('RIP', null) ? old('RIP') : $item->RIP }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Исполнитель</label>
					<input name="executor" id="executor" value="{{ old('executor', null) ? old('executor') : $item->executor }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Адрес суда</label>
					<input name="Address_court" id="Address_court" value="{{ old('Address_court', null) ? old('Address_court') : $item->Address_court }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Стадия рассмотрения</label>
					<input name="Stage_rassmotrenia" id="Stage_rassmotrenia" value="{{ old('Stage_rassmotrenia', null) ? old('Stage_rassmotrenia') : $item->Stage_rassmotrenia }}" type="text" class="form-control">
				</div>
			</div>
						<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Аппеляционный период</label>
					<input name="Appellate_period" id="Appellate_period" value="{{ old('Appellate_period', null) ? old('Appellate_period') : $item->Appellate_period }}" type="text" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Штрафы</label>
					<input name="Fines" id="Fines" value="{{ old('Fines', null) ? old('Fines') : $item->Fines }}" type="text" class="form-control">
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