<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Gourmet - Guest')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
</head>
<body>
    @include('layout.guest.header')
    @yield('content')
    @include('layout.footer')
</body>
</html>