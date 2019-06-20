<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="{{asset('public/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
</head>
<body>
	@yield('content')
	
	
	  <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
<script src="{{ asset('public/js/app.js') }}" defer></script>
</html>