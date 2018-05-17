@extends('layouts.common.frame')

@section('head')
	@include('layouts.site.site_style')
@endsection

@section('menu')
	@include('layouts.site.elements.site_navbar')
@endsection

@section('page-content')
	@yield('content')
@endsection

@section('footer')
	@include('layouts.site.elements.site_footer')	
@endsection

@section('page-code')
	@yield('code')
@endsection