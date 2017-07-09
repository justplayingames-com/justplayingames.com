@extends('layouts.app')

@section('body')
<div class="flex-center position-ref full-height">
    <div class="content">
        @include('partials.title')
        @yield('content')
        <hr>
        <div class="links m-b-lg">
            @yield('content-links')
        </div>
        <div class="social-links">
        @include('partials.social')
        </div>
    </div>
</div>
@endsection