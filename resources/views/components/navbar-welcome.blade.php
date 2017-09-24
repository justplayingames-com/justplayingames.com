@extends('partials.navbar')

@section('navbar-right')
@if (Firewall::isWhitelisted(Request::ip()))
<!-- Authentication Links -->
@if (Auth::guest())
    <li><a href="{{ route('login') }}"><i class="fa fa-fw fa-sign-in text-default"></i> Login</a></li>
@else
    @component('components.navbar.auth.user')
    @endcomponent
@endif
@endif
@endsection

