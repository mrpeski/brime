@extends('control.backend')

@section('content')
	<h1>Staff Listing</h1>
	<a href="pages/create" class="primary-link">Add New Member</a>
		<ol>
	@foreach( $staff as $member )
			<li class="itemm">
				<a href="#{{ $member->sid }}">{{ $member->name }}</a>
				<p>{!! $member->first_name !!}</p>
				<p>{!! $member->last_name !!}</p>
				<p>{!! $member->role !!}</p>
				<div>{{ $member->created_at->diffForHumans() }}</div>
				<a href="#delete">Delete</a>
				<a href="{{route('page_edit', $member->sid)}}">Edit</a>
				<a href="#preview">Preview</a>
			</li>
	@endforeach
		</ol>
@stop