@extends('layouts.app')

@section('body')
<div class="flex-center position-ref full-height">
    <div class="content">
        @include('partials.title')
        @yield('content')
        <hr>
        <div class="links">
            @yield('content-links')
        </div>
    </div>
</div>
@endsection