@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Welcome' }}
@endsection

@section('content')
    <main>
        <p>Home</p>

        <div>
        <img src="{{ asset('assets/placeholder.jpg') }}" alt="placeholder">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus voluptas illo voluptatem numquam fugit placeat expedita alias sint molestiae praesentium magni, earum neque culpa quo ad aspernatur. Reprehenderit, amet omnis!
            Officia repudiandae nobis accusamus, eaque dolorum ex harum eos temporibus quae fuga neque praesentium similique necessitatibus illo quaerat. Dolores nam illum earum ipsa culpa voluptates eaque quae repudiandae, corporis nihil?
            Odio at quisquam dolorum reiciendis, nihil molestiae tempore nesciunt, optio tenetur ratione aliquam? Maxime, blanditiis quod hic laboriosam inventore explicabo incidunt eum vitae suscipit aspernatur vero earum, dignissimos animi fugit?
            Laboriosam distinctio dolore consequatur modi ad explicabo adipisci autem voluptates maiores, eveniet quia cupiditate incidunt aliquid aspernatur recusandae error eaque. Explicabo facere repudiandae architecto id repellendus officia quia, debitis modi?</p>
        </div>
        <div>
            <h2>Contact</h2>
            <ul>
                <li>Monday : 00:00 - 00:00</li>
                <li>Tuesday : 00:00 - 00:00</li>
                <li>Wednesday : 00:00 - 00:00</li>
                <li>Thurstday : 00:00 - 00:00</li>
                <li>Friday : 00:00 - 00:00</li>
                <li>Saturtad : 00:00 - 00:00</li>
                <li>Sunday : 00:00 - 00:00</li>
            </ul>
        </div>
        
        <div>
            <h2>Reservations</h2>
            <a href="#">Reservations button</a>
        </div>


    </main>
@endsection