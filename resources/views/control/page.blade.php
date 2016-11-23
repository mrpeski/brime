@extends('control.backend')

@section('content')
	@if (session('message'))
		<div class="alert alert-success">{{ session('message') }}</div>
	@endif
	<h1>Pages Listing</h1>
	<a href="pages/create" class="primary-link">Add New Page</a>
		<ol>
	@foreach( $pages as $page )
			<li class="itemm">
				<a href="#{{ $page->pid }}">{{ $page->title }}</a>
				<p>{!! $page->content !!}</p>
				<div>{{ $page->created_at->diffForHumans() }}</div>
				<a href="{{ route('page_delete', $page->pid ) }}">Delete</a>
				<a href="{{route('page_edit', $page->pid)}}">Edit</a>
				<a href="#preview">Preview</a>
			</li>
	@endforeach
		</ol>
@stop

