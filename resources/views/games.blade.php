@extends('layouts.app-guest')

@section('content')
<div class="flex-container">
<div class="panel panel-primary">
<div class="panel-heading">
<h2 class="panel-title">Canned Kitty</h2>
</div>
<div class="panel-body">
<p class="lead">Zany! Fun! Cats!</p>

<a class="btn btn-primary" href="{{url('/games/canned-kitty') }}">Play!</a>
</div>
</div>
</div>
@endsection

@section('content-links')
<a class="btn btn-info" href="{{ url('/') }}">Welcome</a>

@if (Firewall::isWhitelisted(Request::ip()))
@if (Route::has('login'))
    @if (Auth::check())
        <a class="btn btn-info" href="{{ url('/home') }}">Home</a>
    @else
        <a class="btn btn-info" href="{{ url('/login') }}">Login</a>
        <a class="btn btn-info" href="{{ url('/register') }}">Register</a>
    @endif
@endif

<a class="btn btn-info" href="{{ url('/blog') }}">News</a>
@endif

@endsection
