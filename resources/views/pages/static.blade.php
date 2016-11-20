@extends('blocks')

@section('content')
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<h3>{{$page->title}}</h3>
		<div class="well">
			<div class="row">
					<div class="col-lg-8">
<!-- 						<h4>What we offer</h4>
 -->					</div>
					<div class="col-lg-4">
						<div class="help-icons pull-right">
					<!-- 		<button type="button" class="btn btn-icon" id="zoom-in" aria-label="Zoom In">
	  							<span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
							</button>
							<button type="button" class="btn btn-icon" id="zoom-out" aria-label="Zoom Out">
	  							<span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span>
							</button> -->
							<button type="button" class="btn btn-icon" id="options" aria-label="Zoom In">
	  							<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
							</button>
						</div>
					</div>
			</div>
				@if ( $page->id = 11 )
					<img src="{{ asset('Chairlady.png')}}" alt="" class="pull-left padded">
				@endif
				{!! $page->content !!}
				<hr>
		</div>
	</div>
</div>
@stop