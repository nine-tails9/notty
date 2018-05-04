@extends('layouts.app')


@section('content')

	<div class="container">
	<div class="page-header">
		<h1>Select Subject</h1>
	</div>
		
		<div class="panel panel-default"  style="width: 40%;">
			@foreach($data as $sub)
			<div class="panel-heading">
				<a href="{{route('files',[$sub->sem, $sub->subject])}}">
					{{ $sub->subject }}
				</a>
			</div>
			@endforeach
		</div>

	</div>

@endsection