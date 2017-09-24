@extends('partials.navbar')

@section('navbar-brand')
@component('components.navbar.brand')
@endcomponent
@endsection

@section('navbar-left')
@component('components.navbar.games')
@endcomponent
@if (Firewall::isWhitelisted(Request::ip()))
@component('components.navbar.blog')
@endcomponent
@endif
@endsection

@section('navbar-right')
<li><a href="https://github.com/justplayingames-com/" title="Github"><i class="fa fa-github"></i></a></li>
<li><a href="https://twitter.com/Just_Playin_G" title="Twitter"><i class="fa fa-twitter"></i></a></li>
@if (Firewall::isWhitelisted(Request::ip()))
<!-- Authentication Links -->
@if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
@else
    @component('components.navbar.auth.user')
    @endcomponent
@endif
@endif
@endsection

