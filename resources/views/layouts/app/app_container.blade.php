@extends('layouts.common.frame')

@section('head')
	@include('layouts.app.app_style')
@endsection

@section('menu')
	<div class="app mainmenu">
		<nav class="navbar navbar-expand-md navbar-light bg-light"><div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<ul class="navbar-nav mr-auto">
					@include('layouts.app.elements.app_navbar_left')
				</ul>
				<ul class="navbar-nav ml-auto">
					@include('layouts.app.elements.app_navbar_right')
				</ul>
			</div>
		</div></nav>
	</div>
@endsection

@section('page-content')
	<div class="app content">
		<div class="container">
			@yield('content')
		</div>
	</div>
@endsection

@section('footer')
	<div class="container"><div class="row">
		<div class="col-sm-6"><i class="glyphicon glyphicon-envelope"></i> {{ config('mail.from.address', 'info@email.com') }}</div>
		<div class="col-sm-6 text-right">&copy; {{ config('app.name', 'Laravel') }}</div>
	</div></div>
@endsection

@section('page-code')
	@yield('code')
@endsection


