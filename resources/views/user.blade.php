@extends('layouts.app')


@section('navbar')
@component('components.navbar-app')
@endcomponent
@endsection

@section('body')

@if (Auth::check())
<h1 class="title">{{$user->name}} <small>{{$user->aka->name}}</small></h1>

<div class="panel">

<dl>
<dt>Email</dt>
<dd>{{$user->email}}</dd>

<dt>Logins</dt>
<dd>
<ul>
@foreach ($user->oauths as $oauth)
<li>{{ $oauth->oauth_provider }}</li>
@endforeach
</ul>
</dd>
</dl>

@endif
@endsection
