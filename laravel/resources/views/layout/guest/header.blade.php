<header class="header">
    <figure class="header-fig">
        <a href="{{route('home')}}"><img class="header-img" src="{{ asset('assets/chef-hat.webp') }}" alt="A chef's hat out of the critically acclaimed 2011 video game, The Elder Srolls V: Skyrim."></a>
    </figure>
    <h1 class="header-h1">The Gourmet's Gourmet Gourmet</h1>
    <nav class="header-nav">
        <ul class="header-ul">
            <li><a class='button' href="{{ route('home') }}">Home</a></li>
            <li><a class='button' href="{{ route('guest') }}">About</a></li>
            <li><a class='button' href="{{ route('menu') }}">Menu</a></li>
            <li><a class='button reserve-button' href="{{ route('reservations.create') }}">Reserve Table</a></li>
        </ul>
    </nav>
</header>