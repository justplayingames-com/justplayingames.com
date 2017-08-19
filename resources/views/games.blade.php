@extends('layouts.app-guest')

@section('content')
<div class="row">

    <div class="col-xs-12 col-sm-6">
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
    <div class="col-xs-12 col-sm-6">
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
    @endif

</div>
@endsection

@section('content-links')
@include('partials.nav-guest')
@endsection
