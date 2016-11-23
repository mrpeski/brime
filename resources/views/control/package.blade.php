@extends('control.backend')

@section('content')
	<h1>Packages Listing</h1>
	<a href="packages/create" class="primary-link">Add New Package</a>
	<!-- <hr> -->
		<ol>
	@foreach( $packages as $package )
			<li class="itemm">
				<a href="#{{ $package->pid }}">{{ $package->name }}</a>
				@if( $package->photos->count() )
					<img src="/{{ $package->photos->first()->thumbnail_path }}" alt="" class="pull-right thumbnail">
				@endif
				<p>{!! $package->description !!}</p>
				<p>{!! $package->city !!}</p>
				<p>{!! $package->country !!}</p>
				<p>{!! $package->price !!}</p>
				<div>{{ $package->created_at->diffForHumans() }}</div>
				<a href="#delete">Delete</a>
				<a href="{{route('package_edit', $package->id)}}">Edit</a>
				<a href="#preview">Preview</a>
			</li>
	@endforeach
		</ol>
@stop