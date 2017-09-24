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

<div class="col-xs-12 col-sm-12 col-lg-4 col-lg-offset-4 margin-bottom-xs">
<a class="btn btn-success btn-lg btn-block" href="{{ url('/auth/github') }}"><i class="fa fa-fw fa-3x fa-github text-success"></i><br>Login with Github</a>
</div>

</div>

</div>

<div class="social-links text-center">
@include('partials.social')
</div>
</div>
@endsection

@section('body')
@endsection
