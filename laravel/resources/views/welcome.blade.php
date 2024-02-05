<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Gourmet')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class='homepage-body'>
    <header class="header">
        <figure class="header-fig">
            <a href="{{route('home')}}"><img class="header-img" src="{{ asset('assets/chef-hat.webp') }}" alt="A chef's hat out of the critically acclaimed 2011 video game, The Elder Srolls V: Skyrim."></a>
        </figure>
        <h1 class="header-h1">The Gourmet's Gourmet Gourmet</h1>
    </header>
    <main class='welcomeForms'>
        <form class='flex-around' action="{{ route('guest') }}" method="POST">
            @csrf
            <input class='button' type="submit" value="Continue as Guest">
        </form>
        <form class='welcomeForm-employee flex-around' action="{{ route('loginEmployee') }}" method="POST">
            @csrf
            <label for='employeeName'>Username:</label>
            <input name='employeeName' id='employeeName' type='text'> 
            <label for='employeePass'>Password:</label>
            <input name='employeePass' id='employeePass' type='password'> 
            <input class='button' type="submit" value="Continue as Employee">
        </form>
    </main>
    @include('layout.footer')
</body>
</html>