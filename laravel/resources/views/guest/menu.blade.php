@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Menu' }}
@endsection

@section('content')
    <main>
        <figure class="chef-warning">
            <img src="{{ asset('assets/the-gourmet.webp') }}" alt="">
            <figcaption>DON'T ORDER OFF MENU!!!</figcaption>
        </figure>

        <section class='menu-category'>
            <h3>Alcoholic Beverages</h3>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Drinks')
            ->where('has_alcohol', 1) as $item)
                <li>
                    <div>
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->price }}</p>
                        <p>{{ $item->allergies }}</p>

                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        

        <section class='menu-category'>
            <h3>Non-alcoholic Beverages</h3>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Drinks')
            ->where('has_alcohol', 0) as $item)
                <li>
                    <div>
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->price }}</p>
                        <p>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <h3>Appetizers</h3>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Appetizers') as $item)
                <li>
                    <div>
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->price }}</p>
                        <p>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <h3>Soups</h3>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Soups') as $item)
                <li>
                    <div>
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->price }}</p>
                        <p>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <h3>Salads</h3>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Salads') as $item)
                <li>
                    <div>
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->price }}</p>
                        <p>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <h3>Main Courses</h3>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Main Courses') as $item)
                <li>
                    <div>
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->price }}</p>
                        <p>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
        <hr>

        <section class='menu-category'>
            <h3>Desserts</h3>
            <menu class='menu-list'>
            @foreach ($products
            ->where('category', 'Desserts') as $item)
                <li>
                    <div>
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->price }}</p>
                        <p>{{ $item->allergies }}</p>
                    </div>
                </li>
            @endforeach
            </menu>
        </section>
    </main>
@endsection