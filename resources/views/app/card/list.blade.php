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
	
	<h1>Карточка</h1>
	
	<form method="post">
		{{ csrf_field() }}
		
		<div class="row py-2">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-default" name="btn_create" value="1"><i class="fas fa-plus-circle"></i> Создать</button>
			</div>
		</div>
		
		<div class="row py-2 d-none d-sm-flex">
			<div class="col-sm-1 font-weight-bold">Ответчик</div>
			<div class="col-sm-1 font-weight-bold">Истец</div>
			<div class="col-sm-1 font-weight-bold">RIP</div>
			<div class="col-sm-0.5 font-weight-bold">Исполнитель</div>
			<div class="col-sm-1 font-weight-bold">Адрес суда</div>
			<div class="col-sm-0.5 font-weight-bold">Стадия рассмотрения</div>
			<div class="col-sm-0.5 font-weight-bold">Аппеляционный период</div>
			<div class="col-sm-1 font-weight-bold">Штрафы</div>
			<div class="col-sm-1 font-weight-bold">Описание</div>
			<div class="col-sm-1 font-weight-bold">Задача</div>
		</div>
		
		@foreach($list as $item)
		<div class="row py-2 border-top">
		
			<div class="col-sm-1"> {{ $item->Otvetchik }} </div>
			<div class="col-sm-1"> {{ $item->Istec }} </div>
			<div class="col-sm-1"> {{ $item->RIP }} </div>
			<div class="col-sm-1"> {{ $item->executor }} </div>
			<div class="col-sm-1"> {{ $item->Address_court }} </div>
			<div class="col-sm-1"> {{ $item->Stage_rassmotrenia }} </div>
			<div class="col-sm-1"> {{ $item->Appellate_period }} </div>
			<div class="col-sm-1"> {{ $item->Fines }} </div>
			<div class="col-sm-1"> {{ $item->Description }} </div>
			<div class="col-sm-1"> {{ ($item->Task) ? $item->Task->Header : '' }} </div>
			<div class="col-sm-2 text-center">
				<button type="submit" class="btn btn-default btn-outline-secondary" name="btn_edit" value="{{ $item->id }}" title="Редактировать"><i class="fas fa-edit"></i></button>
				<button type="submit" class="btn btn-default btn-outline-secondary" name="btn_delete" value="{{ $item->id }}" title="Удалить"><i class="fas fa-trash-alt"></i></button>
			</div>
			
		</div>
		@endforeach
	</form>
	
@endsection

@section('code')
@endsection