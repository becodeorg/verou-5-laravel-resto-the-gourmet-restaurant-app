@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Welcome' }}
@endsection

@section('content')
    <main class="homeWrapper">
        {{-- <img src="{{ asset('assets/inside-view.jpg') }}" alt="inside view" class="guestImage"> --}}
        <article id="restaurantInfo">
            <h2 class="title">About Us</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus voluptas illo voluptatem numquam fugit placeat expedita alias sint molestiae praesentium magni, earum neque culpa quo ad aspernatur. Reprehenderit, amet omnis!
            Officia repudiandae nobis accusamus, eaque dolorum ex harum eos temporibus quae fuga neque praesentium similique necessitatibus illo quaerat. Dolores nam illum earum ipsa culpa voluptates eaque quae repudiandae, corporis nihil?
            Odio at quisquam dolorum reiciendis, nihil molestiae tempore nesciunt, optio tenetur ratione aliquam? Maxime, blanditiis quod hic laboriosam inventore explicabo incidunt eum vitae suscipit aspernatur vero earum, dignissimos animi fugit?
            Laboriosam distinctio dolore consequatur modi ad explicabo adipisci autem voluptates maiores, eveniet quia cupiditate incidunt aliquid aspernatur recusandae error eaque. Explicabo facere repudiandae architecto id repellendus officia quia, debitis modi?</p>
        </article>

        <article id="contactInfo">
            <section class="openingHours">
                <h2 class="title">Opening Hours</h2>
                <table class="hoursTable">
                    <tr class="hoursRow">
                        <td>Monday</td><td>CLOSED</td>
                    </tr>
                    <tr class="hoursRow">
                        <td>Tuesday</td><td>18:00 - 23:00</td>
                    </tr>
                    <tr class="hoursRow">
                        <td>Wednesday</td><td>18:00 - 23:00</td>
                    </tr>
                    <tr class="hoursRow">
                        <td>Thursday</td><td>18:00 - 23:00</td>
                    </tr>
                    <tr class="hoursRow">
                        <td>Friday</td><td>18:00 - 23:00</td>
                    </tr>
                    <tr class="hoursRow">
                        <td>Saturday</td><td>18:00 - 23:00</td>
                    </tr>
                    <tr class="hoursRow">
                        <td>Sunday</td><td>CLOSED</td>
                    </tr>
                </table>
            </section>
            
            <section class="mapLocation">
                <img src="{{ asset('assets/map-location.webp') }}" alt="map location" class="guestMap">
            </section>
        </article>

        
        <article>
            <h2>Reservations</h2>
            <a href="{{ route('reservations.create') }}" class="button">Reservation</a>
        </article>


    </main>
@endsection