@extends('layout.structure')


@section('content')
	<div class="container">
		<h1>Fetch Single Record From Database</h1>
	<div class="post-style">
		<h2><a href="#">{{$posts->title}}</a></h2>
		<div class="inner">
			<small>Written On {{$posts->created_at}}</small>
			{!!$posts->body!!}
		</div>
	</div>
	<hr>
	<a href="{{$posts->id}}/edit" class="btn btn-default float-left">Edit</a>
	<form action="{{action('PostController@destroy',$posts->id)}}" method="post" class="float-right">
		{{ method_field('DELETE') }}
		{{csrf_field()}}
		<button type="submit" class="btn btn-danger pull-right">Delete</button>
	</form>
	</div>
@endsection