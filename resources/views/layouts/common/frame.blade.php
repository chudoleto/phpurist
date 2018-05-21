<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<base href="{{ env('APP_URL') }}" />
		<title>{{ config('app.name', 'Laravel') }}</title>
		<link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />
		<link rel="stylesheet" href="https:fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" type="text/css">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}" type="text/css" />
		
		@include('layouts.common.frame_style')
		@yield('head')
		
	</head>
	<body>
	
	
		
		<div class="page-wrap">
			<div class="content-wrap">
				@yield('menu')
				
				@yield('page-content')
			</div>
			<div class="footer-row">
				<div class="footer-cell">
					<footer>
						@yield('footer')
					</footer>
				</div>
			</div>
		</div>

		
		<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('/js/popper.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		
		@include('layouts.common.frame_code')
		@yield('page-code')
		
	</body>
</html>