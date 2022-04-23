<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Weibo App')- Laravel 新手入门教程</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

@include('layouts._header')
@yield('content')
@include('layouts._footer')
</body>
</html>
