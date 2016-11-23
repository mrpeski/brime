@extends('blocks')

@section('content')
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">

		<h3>{{$node->name}}</h3>

		<div class="well">
			<div class="row">
			<div>Price: {{ '$' . $node->price }}</div>
			<div>City: {{ $node->city }}</div>
			<hr>
					<div class="col-lg-12">
					@foreach( $node->photos as $photo)
						<a href="/{{ $photo->path }}" class="pop"><img src="/{{ $photo->thumbnail_path }}" alt=""></a>
					@endforeach
					</div>
			</div>
				<h4>Description:</h4>
				<p>{!! $node->description !!}</p>
			<hr>
			{{ Form::open(["method" => "POST", "route" => ["single_post", $node->id]]) }}
               	{{ Form::submit('Apply', ['class' => 'btn btn-primary']) }}
			{!! Form::close() !!}
						

			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="{{ asset('js/libs/magnific_popup/jquery.magnific-popup.min.js') }}"></script>

<script>
	$(document).ready(function(){
		$('.pop').magnificPopup({
		  type: 'image',
		  gallery: {
			    enabled: true 
			  }
		});

		$('.ajax').magnificPopup({
			closeOnContentClick: false,
			focus: 'input',
  			type: 'ajax'
		});
	});
</script>
@stop