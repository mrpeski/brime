@extends('control.backend')

@section('content')
	<h1>Add New Package</h1>
	@if (count($errors) > 0)
	<div class="alert">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	{{ Form::open([ 'method' => 'PATCH', ]) }}
		<label for="title">Package Title</label>
		<input type="text" name="title" class="" id="" value="">

		<label for="title">Package Type</label>
		<input type="text" name="title" class="" id="" value="">

		<label for="content">Package Description</label>
		<textarea name="content" id="content" cols="30" rows="10"></textarea>

		<label for="title">Package Price</label>
		<input type="text" name="title" class="" id="" value="">

		<label for="title">City</label>
		<input type="text" name="title" class="" id="" value="">		

		<label for="title">Country</label>
		<input type="text" name="title" class="" id="" value="">

		<label for="attachment">Upload Images</label>
		<input type="file" name="attachment">

		<input type="submit" value="Update">
	{{ Form::close() }}
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