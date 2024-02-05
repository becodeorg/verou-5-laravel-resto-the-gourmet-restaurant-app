<header class="header">
    <figure class="header-fig">
            <img class="header-img" src="{{ asset('assets/chef-hat.webp') }}" alt="A chef's hat out of the critically acclaimed 2011 video game, The Elder Srolls V: Skyrim.">
    </figure>
    <h1 class="header-h1">The Gourmet's Gourmet Gourmet</h1>
    <form class='flex-around' action="{{ route('logout') }}" method="POST">
        <h2 class="header-h2">Welcome to the Gourmet user platform, {{ auth()->user()->name }}</h2>
        @csrf
        <input class='button' type="submit" value="Log out"></input>
    </form>
</header>

