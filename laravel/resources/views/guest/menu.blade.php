@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Menu' }}
@endsection

@section('content')
    <main class='menu-bg'>
        <figure class="chef-warning">
            <img src="{{ asset('assets/the-gourmet.webp') }}" alt="">
            <figcaption>Don't order off-menu...!</figcaption>
        </figure>

        <section class='menu-category'>
            <div class='menu-header-wrap'>
                <img class='menu-icon' src="{{ asset('assets/icon-drinks2.png') }}" alt="">
                <h3 class='menu-header'>Alcoholic Beverages</h3>
            </div>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Drinks')
            ->where('has_alcohol', 1) as $item)
                <li>
                    <div>
                        <h4 class='item-name'>{{ $item->name }}</h4>
                        <p class='item-price'>{{ $item->price }}</p>
                        <p class='item-allergies'>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        

        <section class='menu-category'>
            <div class='menu-header-wrap'>
                <img class='menu-icon' src="{{ asset('assets/icon-drinks1.png') }}" alt="">
                <h3 class='menu-header'>Non-alcoholic Beverages</h3>
            </div>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Drinks')
            ->where('has_alcohol', 0) as $item)
                <li>
                    <div>
                        <h4 class='item-name'>{{ $item->name }}</h4>
                        <p class='item-price'>{{ $item->price }}</p>
                        <p class='item-allergies'>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <div class='menu-header-wrap'>
                <img class='menu-icon' src="{{ asset('assets/icon-appetizers.png') }}" alt="">
                <h3 class='menu-header'>Appetizers</h3>
            </div>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Appetizers') as $item)
                <li>
                    <div>
                        <h4 class='item-name'>{{ $item->name }}</h4>
                        <p class='item-price'>{{ $item->price }}</p>
                        <p class='item-allergies'>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <div class='menu-header-wrap'>
                <img class='menu-icon' src="{{ asset('assets/icon-soups.png') }}" alt="">
                <h3 class='menu-header'>Soups</h3>
            </div>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Soups') as $item)
                <li>
                    <div>
                        <h4 class='item-name'>{{ $item->name }}</h4>
                        <p class='item-price'>{{ $item->price }}</p>
                        <p class='item-allergies'>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <div class='menu-header-wrap'>
                <img class='menu-icon' src="{{ asset('assets/icon-salads.png') }}" alt="">
                <h3 class='menu-header'>Salads</h3>
            </div>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Salads') as $item)
                <li>
                    <div>
                        <h4 class='item-name'>{{ $item->name }}</h4>
                        <p class='item-price'>{{ $item->price }}</p>
                        <p class='item-allergies'>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <div class='menu-header-wrap'>
                <img class='menu-icon' src="{{ asset('assets/icon-maincourses.png') }}" alt="">
                <h3 class='menu-header'>Main Courses</h3>
            </div>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Main Courses') as $item)
                <li>
                    <div>
                        <h4 class='item-name'>{{ $item->name }}</h4>
                        <p class='item-price'>{{ $item->price }}</p>
                        <p class='item-allergies'>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <div class='menu-header-wrap'>
                <img class='menu-icon' src="{{ asset('assets/icon-desserts.png') }}" alt="">
                <h3 class='menu-header'>Desserts</h3>
            </div>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Desserts') as $item)
                <li>
                    <div>
                        <h4 class='item-name'>{{ $item->name }}</h4>
                        <p class='item-price'>{{ $item->price }}</p>
                        <p class='item-allergies'>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
    </main>
@endsection