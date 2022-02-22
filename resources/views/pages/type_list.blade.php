@extends('layouts.default')

@section('breadcrumb')
	<li><a href="/{{ $brand->id }}/{{ $brand->name_url_encoded }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
@stop

@section('content')

<h1>{{ $brand->name }}</h1>

@if (count($popularTypes) > 0)
	<h2>{{ __('misc.popular_manuals') }}:</h2>
	<div class="container popular-manuals manual-container">
		<div class="row">
			<div class="col">
				<ol>
					@foreach($popularTypes as $type)

						<li>
						<a href="/{{ $type->brand->id }}/{{ $type->brand->name_url_encoded }}/{{ $type->id }}/{{ $type->name }}" class="type-link">{{ $type->name }}</a>
						</li>

					@endforeach
				</ol>
			</div>
		</div>
	</div>
@endif

<p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>

    <div class="container">
		<div class="list-grid">
			@foreach($types as $type)
				<li>
					<a href="/{{ $brand->id }}/{{ $brand->name_url_encoded }}/{{ $type->id }}/{{ $type->name_url_encoded }}/">{{ $type->name }}</a>
				</li>
			@endforeach
		</div>
	</div>

@stop