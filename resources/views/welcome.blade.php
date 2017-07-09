@extends('layouts.app-guest')

@section('content')
<h1>Welcome!</h1>
@endsection

@section('content-links')
@if (Firewall::isWhitelisted(Request::ip()))
@if (Route::has('login'))
    @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    @endif
@endif
@endif

<a href="https://github.com/justplayingames-com/">GitHub</a>
@endsection
