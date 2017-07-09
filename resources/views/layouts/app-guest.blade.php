@extends('layouts.app')

@section('body')
<div class="flex-center position-ref full-height">
    <div class="content">
        @include('partials.title')
        
        <div class="m-b-md">
        @yield('content')
        </div>

        <div class="links m-b-lg">
        @yield('content-links')
        </div>
        
        <div class="social-links">
        @include('partials.social')
        </div>
    </div>
</div>
@endsection