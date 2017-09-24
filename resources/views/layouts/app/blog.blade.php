@extends('layouts.app')

@section('navbar')
@component('components.navbar-app')
@endcomponent
@endsection

@section('body')
<div class="content">
<div class="container blog-content">
@yield('content')
</div>
</div>
@endsection