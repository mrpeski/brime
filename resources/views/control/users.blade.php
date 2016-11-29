@extends('control.backend')

@section('content')
	<h1>Users Listing</h1>
	<a href="pages/create" class="primary-link">Add New Member</a>
		<ol>
	@foreach( $users as $user )
			<li class="itemm">
				<a href="#{{ $user->uid }}">{{ $user->name }}</a>
				<p>{!! $user->first_name !!}</p>
				<p>{!! $user->last_name !!}</p>
				<p>{!! $user->role !!}</p>
				<div>{{ $user->created_at->diffForHumans() }}</div>
				<a href="#delete">Delete</a>
				<a href="{{route('page_edit', $user->sid)}}">Edit</a>
				<a href="#preview">Preview</a>
			</li>
	@endforeach
		</ol>
@stop