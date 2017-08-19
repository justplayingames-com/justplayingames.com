<div class="row">

<div class="col-xs-6 col-sm-6 margin-bottom-xs">
<a class="btn btn-primary btn-lg btn-block" href="{{ url('/games') }}"><i class="fa fa-fw fa-3x fa-gamepad text-primary"></i><br>Let's Play!</a>
</div>

<div class="col-xs-6 col-sm-6 margin-bottom-xs">
<a class="btn btn-info btn-lg btn-block" href="{{ url('/blog') }}"><i class="fa fa-fw fa-3x fa-newspaper-o text-info"></i><br>News</a>
</div>

@if (Firewall::isWhitelisted(Request::ip()))
@if (Route::has('login'))
    @if (Auth::check())
    <div class="col-xs-12 margin-bottom-xs">
        <a class="btn btn-info btn-lg btn-block" href="{{ url('/home') }}">Home</a>
    </div>
    @else
    <div class="col-xs-6 margin-bottom-xs">
        <a class="btn btn-success btn-lg btn-block" href="{{ url('/login') }}"><i class="fa fa-fw fa-3x fa-sign-in text-success"></i><br>Login</a>
    </div>
    <div class="col-xs-6 margin-bottom-xs">
        <a class="btn btn-default btn-lg btn-block" href="{{ url('/register') }}"><i class="fa fa-fw fa-3x fa-user-plus text-default"></i><br>Register</a>
    </div>
    @endif
@endif
@endif
</div>
