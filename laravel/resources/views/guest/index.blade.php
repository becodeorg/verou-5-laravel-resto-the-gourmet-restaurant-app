@extends('layout.guest.layout')

@section('title')
    {{ env('APP_NAME') . ' - Welcome' }}
@endsection

@section('content')
    <main>
        <p>Home</p>

        <img src="{{ asset('assets/placeholder.jpg') }}" alt="placeholder">
    </main>
@endsection