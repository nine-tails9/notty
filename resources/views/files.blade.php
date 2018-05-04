@extends('layouts.app')


@section('content')

	<div class="container">
	<div class="page-header">
		<h1>Select Files</h1>
	</div>
		
		<div class="col-md-8 col-md-offset-2">
            @foreach($files as $file)
            <div class="panel panel-default">
                
                       <div class="panel-body">
                       <a href="{{$file[0]->filename}}" target="_blank" download="{{$file[0]->filename}}">
                       	{{$file[0]->original_filename}}
                       </a>
                       <br>
                       
                       <small>

                       <div class="pull-left"><div class="text-warning">Teacher: </div>{{ $file[0]->fileinfo->teacher}}</div>
                       
                       <div class="pull-right"><div class="text-warning">Contributed By: </div>{{ $file[0]->user->name}}</div>
                       
                       </small>
                       </div>
               
            </div>
             @endforeach
        </div>

	</div>

@endsection