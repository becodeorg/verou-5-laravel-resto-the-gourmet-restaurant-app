<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Gourmet - Guest')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @include('layout.guest.header')
    @yield('content')
    @include('layout.guest.footer')
</body>
</html>