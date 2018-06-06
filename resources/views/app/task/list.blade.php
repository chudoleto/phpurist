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
	
	<h1>Список задач</h1>
	
	<form method="post">
		{{ csrf_field() }}
		
		<div class="row py-2">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-default btn-outline-secondary" name="btn_create" value="1"><i class="fas fa-plus-circle"></i> Создать</button>
			</div>
		</div>
		
		<div class="row py-2 d-none d-sm-flex">
			<div class="col-sm-1 font-weight-bold text-center">Заголовок</div>
			<div class="col-sm-1 font-weight-bold text-center">Описание</div>
			<div class="col-sm-1 font-weight-bold text-center">Крайний срок</div>
			<div class="col-sm-2 font-weight-bold text-center">Начало</div>
			<div class="col-sm-1 font-weight-bold text-center">Конец</div>
			<div class="col-sm-2 font-weight-bold text-center">Статус</div>
			<div class="col-sm-1 font-weight-bold text-center">Проект</div>
			<div class="col-sm-2 font-weight-bold text-center">Приоритет задачи</div>
			<div class="col-sm-1 font-weight-bold text-center">Статус задачи</div>
			
			
		</div>
		
		@foreach($list as $item)
		<div class="row py-2 border-top">
		
			<div class="col-sm-1 text-center"> {{ $item->Header }} </div>
			<div class="col-sm-1 text-center"> {{ $item->Description }} </div>
			<div class="col-sm-1 text-center"> {{ $item->Short_deadline }} </div>
			<div class="col-sm-2 text-center"> {{ $item->Start }} </div>
			<div class="col-sm-1 text-center"> {{ $item->End }} </div>
			<div class="col-sm-2 text-center"> {{ $item->Status }} </div>
			<div class="col-sm-1 text-center"> {{ ($item->Project) ? $item->Project->Name : '' }} </div>
			<div class="col-sm-2 text-center"> {{ ($item->Priority_task) ? $item->Priority_task->Description : '' }} </div>
			<div class="col-sm-1 text-center"> {{ ($item->Status_task) ? $item->Status_task->name : '' }} </div>
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