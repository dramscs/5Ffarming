@extends('layout.structure')


@section('content')

<div class="container">
		@include('includes.messages')
		<a href="{{url('posts')}}">Back</a>
		<h4 class="mt-4">Insert Data Into Database</h4>
		
		<form action="{{action('PostController@store')}}" method="POST" class="mt-5">
			{{csrf_field()}}
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" id="title" class="form-control" placeholder="Title">
			</div>

			<div class="form-group">
				<label>Body</label>
				<textarea name="body" id="article-ckeditor" cols="30" class="form-control" rows="5" placeholder="Body Text"></textarea>
			</div>
			<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
		</form>


	</div>

@endsection
