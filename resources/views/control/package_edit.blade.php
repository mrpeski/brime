@extends('control.backend')

@section('content')
	<h1>Edit Package: {{$package->name}} </h1>
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
		<label for="name">Package Title</label>
		<input type="text" name="name" class="" id="" value="{{$package->name}}">

		<label for="type">Package Type</label>
		<input type="text" name="type" class="" id="" value="{{$package->type}}">

		<label for="description">Package Description</label>
		<textarea name="description" id="content" cols="30" rows="10">{{$package->description}}</textarea>

		<label for="price">Package Price</label>
		<input type="text" name="price" class="" id="" value="{{$package->price}}">

		<label for="city">City</label>
		<input type="text" name="city" class="" id="" value="{{$package->city}}">		

		<label for="country">Country</label>
		<input type="text" name="country" class="" id="" value="{{$package->country}}">

		<input type="submit" value="Update">
	{{ Form::close() }}

	<form action="{{ route('package_photos', ['id' => $package->id ]) }}" method="POST" class="dropzone" enctype="multipart/form-data">
		{{ csrf_field() }}
		  <div class="fallback">
		    <input name="file" type="file" multiple />
		  </div>
	</form>
@stop

@section('scripts')
	  <script src="{{ asset('js/libs/tinymce/tinymce.min.js') }}"></script>
	  <style type="text/css">
		iframe #content_ifr { cursor: text; }
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