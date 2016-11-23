@extends('control.backend')

@section('content')
	<h1>Create New Page</h1>
	@if (count($errors) > 0)
	<div class="alert">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form method="POST" action="" >
		{{ csrf_field() }}
		<label for="title">Page Title</label>
		<input type="text" name="title" class="" id="">
		<label for="content">Page Content</label>
		<textarea name="content" id="content" cols="30" rows="10"></textarea>
	
		<input type="submit" value="Create">
	</form>
@stop

@section('scripts')
	  <script src="{{ asset('js/libs/tinymce/tinymce.min.js') }}"></script>
	  <style type="text/css">
		iframe #content_ifr 
		{ cursor: text; }
	  </style>
	  <script> 
	  	tinymce.init(
	  		{ 
				selector:'#content',
	  		  	plugins: "hr",
	  		  	// theme: 'inlite',
	  		  	statusbar: false,
	  		  	menubar: false,
	  		  	resize: 'both',
	  		  	height : 300,
	  		  	toolbar: ['undo redo | styleselect | bold italic | orderedlist']
	  	 	}
	  	 	); 
	  </script>
@stop