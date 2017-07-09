@extends('layouts.app-guest')

@section('content')
@endsection

@section('content-links')
@if (Firewall::isWhitelisted(Request::ip()))
@if (Route::has('login'))
    @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a class="btn btn-info" href="{{ url('/login') }}">Login</a>
        <a class="btn btn-info" href="{{ url('/register') }}">Register</a>
    @endif
@endif
@endif

@endsection
