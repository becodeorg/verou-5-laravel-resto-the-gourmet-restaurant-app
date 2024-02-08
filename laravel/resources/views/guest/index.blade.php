@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Welcome' }}
@endsection

@section('content')
    <main class="home-wrapper">
        <article id="restaurant-info">
            <h2 class="guest-title">About Us</h2>
            <p>Welcome to <b><i>The Gourmet's Gourmet Gourmet</i></b> – where culinary excellence meets unparalleled creativity! Step into a world where every dish tells a story, and every flavor ignites your senses. Inspired by the legendary chef from Skyrim and his renowned tome "Uncommon Taste," our restaurant promises a gastronomic adventure like no other.</p>
            <br>
            <p>At <b><i>The Gourmet's Gourmet Gourmet</i></b>, we invite you to indulge in a symphony of flavors crafted with passion and precision, drawing inspiration from the pages of "Uncommon Taste." From delectable appetizers to exquisite main courses and divine desserts, each creation is a masterpiece in itself, resonating with the spirit of Skyrim's culinary heritage. Whether you're a seasoned epicurean or a curious food enthusiast, prepare to embark on a journey of taste and discovery. Join us and experience the epitome of fine dining – where every bite is a celebration of culinary mastery. Welcome to a realm where food transcends mere sustenance and becomes an art form. Welcome to <b><i>The Gourmet's Gourmet Gourmet</i></b> – where every meal is an unforgettable experience!</p>
        </article>

        <article class="contact-info">
            <h2 class="guest-title">Opening Hours</h2>
            <div class="contact-wrapper">
                <section class="opening-hours">
                    <table class="hours-table">
                        <tr class="hours-row">
                            <td>Monday</td><td>CLOSED</td>
                        </tr>
                        <tr class="hours-row">
                            <td>Tuesday</td><td>18:00 - 23:00</td>
                        </tr>
                        <tr class="hours-row">
                            <td>Wednesday</td><td>18:00 - 23:00</td>
                        </tr>
                        <tr class="hours-row">
                            <td>Thursday</td><td>18:00 - 23:00</td>
                        </tr>
                        <tr class="hours-row">
                            <td>Friday</td><td>18:00 - 23:00</td>
                        </tr>
                        <tr class="hours-row">
                            <td>Saturday</td><td>18:00 - 23:00</td>
                        </tr>
                        <tr class="hours-row">
                            <td>Sunday</td><td>CLOSED</td>
                        </tr>
                    </table>
                </section>
            
                <section class="map-location">
                    <img src="{{ asset('assets/map-location.webp') }}" alt="map location" class="guest-map">
                </section>
            </div>
        </article>

        
        <article class="contact-info">
            <h2 class="guest-title">Reservations</h2>
            <a href="{{ route('reservations.create') }}" class="button">Reservation</a>
        </article>


    </main>
@endsection