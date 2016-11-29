
@if(session()->has('message'))
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
@endif

@include('_header')
@yield('content')

@yield('scripts')

@include('_footer')