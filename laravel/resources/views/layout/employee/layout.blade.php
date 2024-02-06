<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Gourmet')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('scripts')
</head>
<body>
    @include('layout.employee.header')
    @yield('content')
    @include('layout.footer')
</body>
</html>