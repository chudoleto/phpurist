@extends('layouts.site.site_container')

@section('content')
	
	<div class="container">
		<div class="row">
			<main class="container">
    <div class="intro-background"></div>
    <div class="intro"> 
    </div>
    <div class="img-background"></div>
 
    	Контакты
				
				<br><br>
				<button class="btn btn-default" id="push2">Push 2</button>
				</div>
</main>
			
			
	</div>
	
@endsection

@section('code')
	<script>
		var action = function(e) {
			alert('Ok2');
		};
		
		$('#push2').click(action);
	</script>
@endsection
