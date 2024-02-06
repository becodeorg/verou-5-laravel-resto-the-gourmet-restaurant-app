@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Welcome' }}
@endsection

@section('content')
    <main>
        <div id="restaurantInfo">
        <img src="{{ asset('assets/inside-view.jpg') }}" alt="inside view" class="guestImage">
            <h2 class="title">About Us</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus voluptas illo voluptatem numquam fugit placeat expedita alias sint molestiae praesentium magni, earum neque culpa quo ad aspernatur. Reprehenderit, amet omnis!
            Officia repudiandae nobis accusamus, eaque dolorum ex harum eos temporibus quae fuga neque praesentium similique necessitatibus illo quaerat. Dolores nam illum earum ipsa culpa voluptates eaque quae repudiandae, corporis nihil?
            Odio at quisquam dolorum reiciendis, nihil molestiae tempore nesciunt, optio tenetur ratione aliquam? Maxime, blanditiis quod hic laboriosam inventore explicabo incidunt eum vitae suscipit aspernatur vero earum, dignissimos animi fugit?
            Laboriosam distinctio dolore consequatur modi ad explicabo adipisci autem voluptates maiores, eveniet quia cupiditate incidunt aliquid aspernatur recusandae error eaque. Explicabo facere repudiandae architecto id repellendus officia quia, debitis modi?</p>
        </div>

        <div id="contactInfo">
            <div>
                <h2 class="title">Contact</h2>
                <ul>
                    <li>Monday : CLOSED</li>
                    <li>Tuesday : 18:00 - 23:00</li>
                    <li>Wednesday : 18:00 - 23:00</li>
                    <li>Thurstday : 18:00 - 23:00</li>
                    <li>Friday : 18:00 - 23:00</li>
                    <li>Saturtad : 18:00 - 23:00</li>
                    <li>Sunday : CLOSED</li>
                </ul>
            </div>

            <img src="{{ asset('assets/map-location.webp') }}" alt="map location" class="guestImage">
        </div>

        
        <div>
            <h2>Reservations</h2>
            <a href="{{ route('reservations.create') }}" class="button">Reservation</a>
        </div>


    </main>
@endsection