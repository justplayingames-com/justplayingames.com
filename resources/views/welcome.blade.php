@extends('layouts.app-guest')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Just Playin' Games
        </div>
        
        <h1>Welcome!</h1>

        <hr>
        <div class="links">
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
        </div>
    </div>
</div>
@endsection
