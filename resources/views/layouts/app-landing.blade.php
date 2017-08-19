@extends('layouts.app')
@section('body')
<div class="row">
<div class="col-xs-12">
<div class="text-center">
@include('partials.title')
</div>
</div>
</div>

<div class="row">
<div class="col-xs-12">
<div class="jumbotron">
@yield('content')
</div>
</div>
</div>

<div class="social-links text-center">
@include('partials.social')
</div>
@endsection