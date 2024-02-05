@extends('layout.layout')

@section('title')
    {{ env('APP_NAME') . ' - Home' }}
@endsection

@section('content')
    <main>
        <h1>The Gourmet's Gourmet Gourmet</h1>
        <form action="{{ route('loginEmployee') }}" method="POST">
            <input type="button" value="Continue as Employee"></input>
        </form>
        <form action="{{ route('loginGuest') }}" method="POST">
            <input type="button" value="Continue as Guest"></input>
        </form>
    </main>
@endsection