@extends('pub_theme::layouts.plane')
@section('body')
	{{--
	@include('pub_theme::includes.components')
	@include('pub_theme::includes.flash')
	
	<div class="site-wrapper">
	--}}
		@include('pub_theme::layouts.partials.headernav')
		@include('pub_theme::layouts.partials.sidebar')
		@yield('content')
	{{-- </div> --}}
	@if(isset($footer) && $footer=='off')
	@else
	@include('pub_theme::layouts.partials.footer')
	@endif
	</div>
</div>
@endsection    


