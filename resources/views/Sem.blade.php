@extends('layouts.app')


@section('content')

	<div class="container">
	<div class="page-header">
		<h1>Select Sem</h1>
	</div>
		
		<div class="panel panel-default"  style="width: 40%;">
			@foreach($data as $sem)
			<div class="panel-heading">
				<a href="{{route('subject',$sem->sem)}}">
					{{ $sem->sem }}
				</a>
			</div>
			@endforeach
		</div>

	</div>

@endsection