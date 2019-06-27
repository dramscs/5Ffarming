<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/admin/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
    <title></title>

</head>
<body>
<div class="container">
@yield('section')
</div>




<script src="{{ asset('public/admin/js/app.js') }}" defer></script>
<script src="{{asset('public/bootstrap/assets/js/jquery-3.4.1.min')}}"></script>
<script src="{{asset('public/bootstrap/assets/js/popper.min')}}"></script>
</body>
</html>