@extends('layouts.app')
@section('navbar')
@component('components.navbar-welcome')
@endcomponent
@endsection

@section('body')

<div class="text-center">
@include('partials.title')
</div>

<div class="jumbotron">
<div class="row">

<div class="col-xs-6 col-sm-6 col-lg-4 col-lg-offset-2 margin-bottom-xs">
<a class="btn btn-primary btn-lg btn-block" href="{{ url('/games') }}"><i class="fa fa-fw fa-3x fa-gamepad text-primary"></i><br>Let's Play!</a>
</div>

<div class="col-xs-6 col-sm-6 col-lg-4 margin-bottom-xs">
<a class="btn btn-info btn-lg btn-block" href="{{ url('/blog') }}"><i class="fa fa-fw fa-3x fa-newspaper-o text-info"></i><br>News</a>
</div>

</div>

</div>

<div class="social-links text-center">
@include('partials.social')
</div>
</div>
@endsection
