@extends('layouts.default')

@section('head')
<meta name="robots" content="index, nofollow">
@stop

@section('breadcrumb')
	<li><a href="/{{ $brand->id }}/{{ $brand->name_url_encoded }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
	<li><a href="/{{ $brand->id }}/{{ $brand->name_url_encoded }}/{{ $type->id }}/{{ $type->name_url_encoded }}/" alt="Manuals for '{{$brand->name}} {{ $type->name }}'" title="Manuals for '{{$brand->name}} {{ $type->name }}'">{{ $type->name }}</a></li>
	<li><a href="/{{ $brand->id }}/{{ $brand->name_url_encoded }}/{{ $type->id }}/{{ $type->name_url_encoded }}/{{ $manual->id }}/" alt="View manual for '{{$brand->name}} {{ $type->name }}'" title="View manual for '{{$brand->name}} {{ $type->name }}'">View</a></li>
@stop

@section('content')

<h1>{{ $brand->name }} - {{ $type->name }}</h1>

<div class="head-link">
	@if ($manual->locally_available)
		<iframe src="{{ $manual->url }}" width="780" height="600" frameborder="0" marginheight="0" marginwidth="0">
		Iframes are not supported<br />
		<a href="{{ $manual->url }}">
			<button type="button">Click here to download the manual</button>
		</a>
		</iframe>
	@else
		<a href="{{ $manual->url }}">Click here to download the manual</a>
	@endif
<div



@stop
