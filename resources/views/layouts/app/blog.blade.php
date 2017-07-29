@extends('layouts.app')

@section('body')
<div class="content">
    @include('partials.title')

    <div class="social-links m-b-lg">
    @include('partials.social')
    </div>

    <div class="container blog-content">
    @yield('content')
    </div>
</div>
@endsection