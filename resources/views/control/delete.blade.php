@extends('control.backend')

@section('content')
	<h1>Pages Listing</h1>
	<a href="pages/create">Add New Page</a>
	<a href="#{{ $page->pid }}">{{ $page->title }}</a>
	<p>{!! $page->content !!}</p>
	<div>{{ $page->created_at->diffForHumans() }}</div>
	{{ Form::open([ 'method' => 'DELETE', 'route' => ['page_destroy', $page->pid]]) }}
		{{ csrf_field() }}			
		<button type="submit" class="btn btn-primary">DELETE</button>
	{{ Form::close() }}
		<a href="{{route('page_edit', $page->pid)}}">Edit</a>
		<a href="#preview">Preview</a>
@stop
