@extends('layouts.app')

@section('body')
@component('components.navbar-guest')
@endcomponent

@yield('content')
@endsection