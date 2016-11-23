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
	{{ Form::open([ 'method' => 'POST', ]) }}
		<label for="name">Package Title</label>
		<input type="text" name="name" class="" id="" value="">

		<label for="type">Package Type</label>
		<input type="text" name="type" class="" id="" value="">

		<label for="description">Package Description</label>
		<textarea name="description" id="content" cols="30" rows="10"></textarea>

		<label for="price">Package Price</label>
		<input type="number" name="price" class="" id="" value="">

		<label for="city">City</label>
		<input type="text" name="city" class="" id="" value="">		

		<label for="country">Country</label>
		<input type="text" name="country" class="" id="" value="">

		<input type="submit" value="Create">
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