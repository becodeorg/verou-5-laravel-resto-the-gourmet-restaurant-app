@extends('layout.layout')

@section('title')
    {{ env('APP_NAME') . ' - Home' }}
@endsection

@section('content')
    <main>
        <h1>The Gourmet's Gourmet Gourmet</h1>
        <form action="{{ route('loginEmployee') }}" method="POST">
            @csrf
            <input type="submit" value="Continue as Employee"></input>
        </form>
        <form action="{{ route('guest') }}" method="POST">
            @csrf
            <input type="submit" value="Continue as Guest"></input>
        </form>
    </main>
@endsection