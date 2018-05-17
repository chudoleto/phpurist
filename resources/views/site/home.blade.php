@extends('layouts.site.site_container')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col">
				Я работаю...
			</div>
		</div>
	</div>
	
@endsection

@section('code')
	<script>
		$('h1').click(function(e) {
			alert('Нажали "' + $(this).html() + '"');
		});
	</script>
@endsection