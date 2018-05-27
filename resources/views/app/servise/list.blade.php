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
	
	<h1>Приоритет задачи</h1>
	
	<form method="post">
		{{ csrf_field() }}
		
		<div class="row py-2">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-default" name="btn_create" value="1"><i class="fas fa-plus-circle"></i> Создать</button>
			</div>
		</div>
		
	
		<div class="row py-2"><div class="col-sm-6 font-weight-bold">Описание и приватность задачи</div></div>
		
		@foreach($list as $item)
		<div class="row py-2 border-top">
		
			<div class="col-sm-2">
				{{ $item->Kod }}
			</div>
				<div class="col-sm-2">
				{{ $item->Name }}
			</div>
			<div class="col-sm-2">
				{{ $item->Version }}
			</div>
				<div class="col-sm-2">
				{{ $item->Address }}
			</div>
			<div class="col-sm-4 text-right">
				<button type="submit" class="btn btn-default" name="btn_edit" value="{{ $item->id }}" title="Редактировать"><i class="fas fa-edit"></i></button>
				<button type="submit" class="btn btn-default" name="btn_delete" value="{{ $item->id }}" title="Удалить"><i class="fas fa-trash-alt"></i></button>
			</div>
			
		</div>
		@endforeach
		
	</form>
	
@endsection

@section('code')
@endsection