@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="padding: 50px;">
                <form action="/upload" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile" name="docfile">
                  </div>
          
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="padding: 50px;">
                @foreach($data as $file)
                    <div class="panel-body">
                        
                       <a href="{{$file->filename}}" target="_blank" download="{{$file->filename}}">{{$file->original_filename}}</a> 
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
