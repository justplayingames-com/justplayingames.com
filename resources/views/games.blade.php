@extends('layouts.app')

@section('navbar')
@component('components.navbar-app')
@endcomponent
@endsection

@section('body')
<div class="row">

    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
    @component('components.panel')
    @slot('title')
    Canned Kitty
    @endslot
    <div class="text-center">
    <p class="lead">Zany! Fun! Cats!</p>
    <a class="btn btn-success btn-lg" href="{{url('/games/canned-kitty') }}">Play!</a>
    </div>
    @endcomponent
    </div>

    @if (Firewall::isWhitelisted(Request::ip()))
    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
    @component('components.panel')
    @slot('title')
    Get Off My Lawn
    @endslot
    <div class="text-center">
    <p class="lead">Back in my day...</p>
    <a class="btn btn-success btn-lg" href="{{url('/games/get-off-my-lawn') }}">Play!</a>
    </div>
    @endcomponent
    </div>

    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
    @component('components.panel')
    @slot('title')
    Breakout
    @endslot
    <div class="text-center">
    <p class="lead">Classic! Breakout! Fun!</p>
    <a class="btn btn-success btn-lg" href="{{url('/games/breakout') }}">Play!</a>
    </div>
    @endcomponent
    </div>

    @endif

</div>
@endsection

