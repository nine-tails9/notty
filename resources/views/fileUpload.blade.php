@extends('layouts.app')


@section('content')
 
 	<div class="container">

	  <div class="row">

	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default" style="padding: 50px;">
	                <form action="/upload" method="post" enctype="multipart/form-data">
	                 {{ csrf_field() }}
	                 <div class="form-group">
	                    <label for="exampleInputFile">Subject</label>
	                    <input type="text"  class="form-control" id="exampleInputFile" name="subject">
	                  </div>
	                  <div class="form-group">
	                    <label for="exampleInputFile">Teacher</label>
	                    <input type="text" class="form-control" id="exampleInputFile" name="teacher">
	                  </div>
	                  <div class="form-group">
	                  <select class="form-control" name="sem">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						  <option>6</option>
						  <option>7</option>
						  <option>8</option>
						</select>
					</div>
	                  <div class="form-group">
	                    <label for="exampleInputFile">File input</label>
	                    <input type="file" id="exampleInputFile" name="docfile">
	                  </div>
	          
	                  <button type="submit" class="btn btn-default">Submit</button>
	                  <small>
				 		@include('err')
				 		</small>
	                </form>
	            </div>
	        </div>

	    </div>

    </div>
@endsection