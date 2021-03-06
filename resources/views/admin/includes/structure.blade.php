<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{asset('public/admin/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
</head>

<body>
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('public/admin/js/app.js') }}" defer></script>
    <script src="{{asset('public/bootstrap/assets/js/jquery-3.4.1.min')}}"></script>
    <script src="{{asset('public/bootstrap/assets/js/popper.min')}}"></script>
</body>

</html>